<?php

namespace App\Http\Controllers\FrontPanel;


use App\Http\Controllers\Controller;
use App\Http\Requests\FrontPanel\RegistrationBusinessRequest;
use App\Http\Requests\FrontPanel\RegistrationPersonalRequest;
use App\Mail\RegistrationMail;
use App\Models\Account;
use App\Models\BusinessAccount;
use App\Models\Country;
use App\Models\PersonalAccount;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;
use App\Jobs\SendRegistrationMail;


class RegistrationController extends Controller
{
    public function loadRegistration($userId = ''): Response
    {
        $title = 'Register';
        $user = empty(Account::where('user_id', $userId)->first()) ? json_encode(User::where('id', $userId)->first()) : (Account::where('user_id', $userId)->first()->type === 'Personal' ? json_encode(User::where('id', $userId)->with('account.personalAccount')->first()) : json_encode(User::where('id', $userId)->with('account.businessAccount')->first()));
        $userCountry = !($position = Location::get(request()->getClientIp())) ? null : Country::where('country', $position->countryName)->first();
        $userState = !($position = Location::get(request()->getClientIp())) ? null : State::where('state', $position->regionName)->first();
        $countries = Country::where('status', 'Active')->get();
        $states = State::where('status', 'Active')->get();
        return response()->view('FrontPanel.registration', compact('title', 'user', 'userCountry', 'userState', 'countries', 'states'), Response::HTTP_OK);
    }


    public function registerPersonalAccount(RegistrationPersonalRequest $request): JsonResponse
    {
        try {
            $latestPersonalAccount = Account::where('type', 'Personal')->latest()->first();
            if ($latestPersonalAccount) {
                $number = explode('-', $latestPersonalAccount->number)[2] + 1;
            } else {
                $number = 100000;
            }
            $verificationCode = mt_rand(100000, 999999);
            if ($request->user === 'null') {
                $user = new User();
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->verification_code = $verificationCode;
                $user->verification_token = sha1($verificationCode);
                $user->status = 'Inactive';
                $user->save();
                $account = new Account();
                $account->user_id = $user->id;
                $account->number = 'P-' . date('Ymd') . '-' . $number;
                $account->type = 'Personal';
                $account->status = 'Pending';
                $account->save();
                $personalAccount = new PersonalAccount();
                $personalAccount->account_id = $account->id;
                $personalAccount->first_name = $request->first_name;
                $personalAccount->last_name = $request->last_name;
                $personalAccount->country_id = $request->country_id;
                $personalAccount->phone = $request->phone;
                $personalAccount->save();
            } else {
                if (Account::where('user_id', json_decode($request->user)->id)->first()->number !== null || Account::where('user_id', json_decode($request->user)->id)->first()->type !== 'Personal') {
                    return response()->json(['message' => 'Invalid Operation!'], Response::HTTP_BAD_REQUEST);
                }
                $user = User::where('id', json_decode($request->user)->id)->first();
                $user->password = Hash::make($request->password);
                $user->verification_code = $verificationCode;
                $user->verification_token = sha1($verificationCode);
                $user->save();
                $account = Account::where('user_id', $user->id)->first();
                $account->number = 'P-' . date('Ymd') . '-' . $number;
                $account->save();
            }
            $user = User::where('id', $user->id)->with('account.personalAccount')->first();
            $job = (new SendRegistrationMail($user, false))->delay(now()->addSeconds(2));
            dispatch($job);
            Session::put('verification_token', $user->verification_token);
            return response()->json(['message' => 'Personal Account Registration Successful'], Response::HTTP_OK);

        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function registerBusinessAccount(RegistrationBusinessRequest $request): JsonResponse
    {
        try {
            $lastBusinessAccount = Account::where('type', 'Business')->where('number', 'like', $request->type === 'Retail' ? 'R%' : 'W%')->latest()->first();
            if ($lastBusinessAccount) {
                $number = explode('-', $lastBusinessAccount->number)[2] + 1;
            } else {
                $number = 100000;
            }
            $verificationCode = mt_rand(100000, 999999);
            if ($request->user === 'null') {
                $user = new User();
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->verification_code = $verificationCode;
                $user->verification_token = sha1($verificationCode);
                $user->status = 'Inactive';
                $user->save();
                $account = new Account();
                $account->user_id = $user->id;
                $account->number = $request->type === 'Retail' ? 'R-' . date('Ymd') . '-' . $number : 'W-' . date('Ymd') . '-' . $number;
                $account->type = 'Business';
                $account->status = 'Pending';
                $account->save();
                $businessAccount = new BusinessAccount();
                $businessAccount->account_id = $account->id;
                $businessAccount->type = $request->type;
                $businessAccount->name = $request->name;
                $businessAccount->phone = $request->phone;
            } else {
                if (Account::where('user_id', json_decode($request->user)->id)->first()->number !== null || Account::where('user_id', json_decode($request->user)->id)->first()->type !== 'Business') {
                    return response()->json(['message' => 'Invalid Operation!'], Response::HTTP_BAD_REQUEST);
                }
                $user = User::where('id', json_decode($request->user)->id)->first();
                $user->password = Hash::make($request->password);
                $user->verification_code = $verificationCode;
                $user->verification_token = sha1($verificationCode);
                $user->save();
                $account = Account::where('user_id', $user->id)->first();
                $account->number = $request->type === 'Retail' ? 'R-' . date('Ymd') . '-' . $number : 'W-' . date('Ymd') . '-' . $number;
                $account->save();
                $businessAccount = BusinessAccount::where('account_id', $account->id)->first();
            }
            $businessAccount->country_id = $request->country_id;
            $country = Country::where('id', $request->country_id)->first();
            if ($country->country === 'United States') {
                $businessAccount->state_id = $request->state_id;
            } else {
                $businessAccount->city = $request->city;
            }
            $businessAccount->save();
            $user = User::where('id', $user->id)->with('account.businessAccount')->first();
            $job = (new SendRegistrationMail($user, false))->delay(now()->addSeconds(2));
            dispatch($job);
            Session::put('verification_token', $user->verification_token);
            return response()->json(['message' => 'Business Account Registration Successful']);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


}

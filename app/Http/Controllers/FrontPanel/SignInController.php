<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontPanel\SignInRequest;


use App\Mail\RegistrationMail;
use App\Mail\VerificationCodeMail;
use App\Models\Account;

use App\Models\ConnectedAccount;
use App\Models\Country;
use App\Models\PersonalAccount;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Stripe\StripeClient;


class SignInController extends Controller
{
    public function loadSignIn(): Response
    {
        return response()->view('FrontPanel.sign_in', [], Response::HTTP_OK);
    }

    public function authenticateSignIn(SignInRequest $request) : JsonResponse
    {
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'Active'], (int)$request->remember_me)) {
                $request->session()->regenerate();
                return response()->json(['message' => 'Authorized Access', 'payload' => ['csrf_token' => csrf_token()]], Response::HTTP_OK);
            }
            $user = User::where('email', $request->email)->where('for', 'Account Panel')->with(['account.personalAccount', 'account.businessAccount'])->first();
            if (!empty($user) && Hash::check($request->password, $user->password)  && $user->account->status === 'Pending') {
                $verificationCode = mt_rand(100000, 999999);
                $user->verification_code = $verificationCode;
                $user->verification_token = sha1($verificationCode);
                $user->save();
                Mail::to($user->email)->send(new VerificationCodeMail($user, 'Pending Account'));
                return response()->json(['message' => 'Pending Account', 'payload' => $user], Response::HTTP_UNAUTHORIZED);
            }
            return response()->json(['message' => 'Unauthorized Access!'], Response::HTTP_UNAUTHORIZED);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function redirectToProvider($provider, $whereTo): RedirectResponse
    {
        Session::forget('provider_error');
        if ($whereTo === 'dashboard') {
            $redirectUri = '/account/panel/overview';
        } else {
            $redirectUri = url()->previous();
        }
        Session::put('redirect_uri', $redirectUri);
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider): RedirectResponse
    {

        try {
            $redirectUri = Session::get('redirect_uri');
            Session::forget('redirect_uri');
            $providerUser = Socialite::driver($provider)->user();
            $user = User::where('provider_id', $providerUser->getId())->first();
            if (empty($user)) {
                $existUser = User::where('email', $providerUser->getEmail())->first();
                if ($existUser) {
                    if (!empty($existUser->provider_name)) {
                        if ($existUser->provider_name === 'google') {
                            Session::put('provider_error', 'You already have an account in GoodGross with Google association!');
                        }
                        if ($existUser->provider_name === 'facebook') {
                            Session::put('provider_error', 'You already have an account in GoodGross with Facebook association!');
                        }
                        if ($existUser->provider_name === 'twitter') {
                            Session::put('provider_error', 'You already have an account in GoodGross with Twitter association!');
                        }
                    } else {
                        Session::put('provider_error', 'You already have an account in GoodGross!');
                    }
                    return redirect('/sign-in');
                }
                $user = new User();
                $user->provider_id = $providerUser->getId();
                $user->provider_name = $provider;
                $user->email = $providerUser->getEmail();
                $user->avatar = $providerUser->getAvatar();
                $user->status = 'Active';
                $user->save();
                $latestPersonalAccount = Account::where('type', 'Personal')->latest()->first();
                if ($latestPersonalAccount) {
                    $number = explode('-', $latestPersonalAccount->number)[2] + 1;
                } else {
                    $number = 100000;
                }
                $account = new Account();
                $account->user_id = $user->id;
                $account->number = 'P-' . date('Ymd') . '-' . $number;
                $account->type = 'Personal';
                $account->status = 'Verified';
                $account->save();
                $personalAccount = new PersonalAccount();
                $personalAccount->account_id = $account->id;
                $personalAccount->first_name = $providerUser->getName();
                $personalAccount->last_name = $providerUser->getNickname();
                $personalAccount->image = $providerUser->getAvatar();
                $personalAccount->save();
                $stripe = new StripeClient(
                    Config::get('stripe')['secret']
                );
                $stripeConnectedAccount = $stripe->accounts->create([
                    'type' => 'express',
                    'country' => 'US',
                    'email' => $user->email,
                    'capabilities' => [
                        'card_payments' => ['requested' => true],
                        'transfers' => ['requested' => true],
                    ],
                ]);
                $connectedAccount = new ConnectedAccount();
                $connectedAccount->account_id = $user->account->id;
                $connectedAccount->connected_account_id = $stripeConnectedAccount->id;
                $connectedAccount->connected_account_object = $stripeConnectedAccount;
                $connectedAccount->connected_account_origin = 'Stripe';
                $connectedAccount->status = 'Pending';
                $connectedAccount->save();
                $user = User::where('id', $user->id)->with('account.personalAccount')->first();
                Mail::to($user->email)->send(new RegistrationMail($user, true));
            }
            Auth::login($user);
            return redirect($redirectUri);
        } catch (\Exception $exception) {
            Session::put('provider_error', $exception->getMessage());
            return redirect('/sign-in');
        }

    }

    public function signOut(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/sign-in');

    }


    public function loadControlPanelSignIn(): Response
    {
        $title = 'Control Panel Sign in';
        $activeNav = 'Control Panel Sign in';
        return response()->view('FrontPanel.control_panel_sign_in', compact('title', 'activeNav'), Response::HTTP_OK);
    }

    public function authenticateControlPanelSignIn(SignInRequest $request) : JsonResponse
    {
        try {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'Active'], (int)$request->remember_me)) {
                $request->session()->regenerate();
                return response()->json(['message' => 'Authorized Control Panel Access'], Response::HTTP_OK);
            }
            return response()->json(['message' => 'Unauthorized Access!'], Response::HTTP_UNAUTHORIZED);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function controlPanelSignOut(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/control/panel/sign-in');
    }



}

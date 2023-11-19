<?php

namespace App\Http\Controllers\FrontPanel;


use App\Http\Controllers\Controller;
use App\Http\Requests\FrontPanel\VerificationRequest;
use App\Jobs\SendRegistrationMail;
use App\Jobs\SendVerificationCodeMail;
use App\Mail\VerificationCodeMail;
use App\Models\Account;
use App\Models\ConnectedAccount;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use \Stripe\StripeClient;


class VerificationController extends Controller
{
    public function loadEmailVerification(): Response
    {
        if (User::where('verification_token', Session::get('verification_token'))->first()) {
            return response()->view('FrontPanel.email_verification', [], Response::HTTP_OK);
        } else {
            return response()->view('errors.FrontPanel.404', [], Response::HTTP_NOT_FOUND);
        }
    }

    public function verifyEmail(VerificationRequest $request): JsonResponse
    {
        try {
            $user = User::where('verification_token', Session::get('verification_token'))->with(['account'])->first();
            $user->status = 'Active';
            $user->verification_token = null;
            $user->verification_code = null;
            $user->save();
            $user->account->status = 'Verified';
            $user->account->save();
            if ( ! empty(Product::where('account_id', $user->account->id)->first())) {
                Product::where('account_id', $user->account->id)->update(['status' => 'Pending']);
            }
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $stripeConnectedAccount = $stripe->accounts->create([
                'type' => 'custom',
                'country' => 'US',
                'email' => $user->email,
                'business_type' => $user->account->type === 'Personal' ? 'individual' : 'company',
                'capabilities' => [
                    'card_payments' => ['requested' => true],
                    'transfers' => ['requested' => true],
                ],
                ['tos_acceptance' => ['date' => strtotime(date('Y-m-d H:i:s')), 'ip' => $request->ip()]]
            ]);
            $user->account->stripe_connected_account_id = $stripeConnectedAccount->id;
            $user->account->save();

            $stripeCustomer = $stripe->customers->create([
                'email' => $user->email,
                'description' => $user->account->type === 'Personal' ? $user->account->personalAccount->first_name . ' ' . $user->account->personalAccount->last_name : $user->account->businessAccount->name,
            ]);
            $user->account->stripe_customer_id = $stripeCustomer->id;
            $user->account->save();
            Session::forget('verification_token');
            Auth::login($user);
            return response()->json(['message' => 'Email Verification Successful'], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function resendVerificationCode(Request $request): JsonResponse
    {
        try {
            $user = User::where('verification_token', Session::get('verification_token'))->with(['account.personalAccount', 'account.businessAccount'])->first();
            $job = (new SendVerificationCodeMail($user, 'Pending Account'))->delay(now()->addSeconds(2));
            dispatch($job);
            return response()->json(['message' => 'Resending Verification Code Successful'], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

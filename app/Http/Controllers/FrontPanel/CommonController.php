<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontPanel\AccountBillingAddressRequest;
use App\Http\Requests\FrontPanel\AccountCardRequest;
use App\Http\Requests\FrontPanel\AccountShippingToAddressRequest;

use App\Http\Requests\FrontPanel\GuestBillingAddressRequest;
use App\Http\Requests\FrontPanel\GuestShippingToAddressRequest;
use App\Models\AccountBillingAddress;
use App\Models\AccountCard;
use App\Models\AccountShippingToAddress;
use App\Models\Country;
use App\Models\Product;
use App\Models\State;
use App\Models\User;
use App\Models\WatchedProduct;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use \Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;
use Stripe\StripeClient;

class CommonController extends Controller
{

    public function checkAccountLoginStatus():JsonResponse
    {
        try {
            if (auth()->check()) {
                $user = User::where('id', auth()->user()->id)->with(['account.personalAccount', 'account.businessAccount'])->first();
                return response()->json(['payload' => ['login_status' => true, 'user' => $user]], Response::HTTP_OK);
            } else {
                return response()->json(['payload' => ['login_status' => false]], Response::HTTP_OK);
            }
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    ////////////////////////////////////Account Shipping Address Start//////////////////////////////////////

    public function isAccountShippingAddressAvailable(): JsonResponse
    {
        try {
            $payload = auth()->user()->account->accountShippingToAddresses;
            return response()->json(['payload' => $payload], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAccountShippingToAddresses(): JsonResponse
    {
        try {
            $payload = AccountShippingToAddress::where('account_id', auth()->user()->account->id)->with(['country', 'state'])->orderBy('is_default', 'desc')->get();
            return response()->json(['payload' => ['account_shipping_to_addresses' => $payload]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAccountShippingToAddress(Request $request): JsonResponse
    {
        try {
            $accountShippingToAddress = AccountShippingToAddress::where('id', $request->id)->with('country')->first();
            $countries = Country::where('status', 'Active')->get();
            $states = State::where('status', 'Active')->get();
            return response()->json(['payload' => ['account_shipping_to_address' => $accountShippingToAddress, 'countries' => $countries, 'states' => $states]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getInformationForAccountShippingToAddressForm(Request $request): JsonResponse
    {
        try {
            $countries = Country::where('status', 'Active')->get();
            $states = State::where('status', 'Active')->get();
            $userState = !($position = Location::get(request()->getClientIp())) ? null : State::where('state', $position->regionName)->first();
            $user = User::where('id', auth()->user()->id)->with(['account.personalAccount.country', 'account.businessAccount.country'])->first();
            return response()->json(['payload' => ['countries' => $countries, 'states' => $states, 'user_state' => $userState, 'user' => $user]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeDefaultAccountShippingToAddress(Request $request): JsonResponse
    {
        try {
            AccountShippingToAddress::where('account_id', auth()->user()->account->id)->update(['is_selected' => 0]);
            AccountShippingToAddress::where('id', $request->id)->update(['is_selected' => 1]);
            return response()->json(['message' => 'Account Shipping Address Selected Successfully'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteAccountShippingToAddress(Request $request): JsonResponse
    {
        try {
            AccountShippingToAddress::where('id', $request->id)->delete();
            return response()->json(['message' => 'Account Shipping Address Deleted Successfully'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function saveAccountShippingToAddress(AccountShippingToAddressRequest $request): JsonResponse
    {
        try {
            $country = Country::where('id', $request->country_id)->first();
            $accountShipping = $request->has('id') ? AccountShippingToAddress::find($request->id) : new AccountShippingToAddress();
            $accountShipping->account_id = auth()->user()->account->id;
            $accountShipping->first_name = $request->first_name;
            $accountShipping->last_name = $request->last_name;
            $accountShipping->country_id = $request->country_id;
            if ($country->country === 'United States') {
                $accountShipping->state_id = $request->state_id;
            }
            $accountShipping->city = $request->city;
            $accountShipping->zip_code = $request->zip_code;
            $accountShipping->address_line_1 = $request->address_line_1;
            $accountShipping->address_line_2 = $request->address_line_2;
            $accountShipping->phone = $request->phone;
            $accountShipping->email = $request->email;
            if ( ! $request->has('id') ) {
                AccountShippingToAddress::where('account_id', auth()->user()->account->id)->update(['is_selected' => 0]);
                $accountShipping->is_selected = 1;
            }
            $accountShipping->save();
            return response()->json(['message' => 'Account Shipping Address Saved Successfully'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    ///////////////////////////Account Shipping Address End/////////////////////////////////////////////////////////////

    ////////////////////////////////////Guest Shipping Address Start//////////////////////////////////////

    public function isGuestShippingAddressAvailable(): JsonResponse
    {
        try {
            if (Session::has('guest_shipping_to_address')) {
                return response()->json(['payload' => Session::get('guest_shipping_to_address')], Response::HTTP_OK);
            }
            return response()->json(['payload' => null], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getGuestShippingAddress(): JsonResponse
    {
        try {
            $payload = Session::get('guest_shipping_to_address');
            return response()->json(['payload' => ['guest_shipping_to_address' => $payload]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getGuestShippingAddressForEdit(): JsonResponse
    {
        try {
            $payload = Session::get('guest_shipping_to_address');
            $countries = Country::where('status', 'Active')->get();
            $states = State::where('status', 'Active')->get();
            return response()->json(['payload' => ['guest_shipping_to_address' => $payload, 'countries' => $countries, 'states' => $states]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    public function getInformationForGuestShippingAddressForm(Request $request): JsonResponse
    {
        try {
            $countries = Country::where('status', 'Active')->get();
            $states = State::where('status', 'Active')->get();
            $userCountry = !($position = Location::get(request()->getClientIp())) ? null : Country::where('country', $position->countryName)->first();
            $userState = !($position = Location::get(request()->getClientIp())) ? null : State::where('state', $position->regionName)->first();
            return response()->json(['payload' => ['countries' => $countries, 'states' => $states, 'user_country' => $userCountry, 'user_state' => $userState]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    public function saveGuestShippingAddress(GuestShippingToAddressRequest $request): JsonResponse
    {
        try {
            $country = Country::where('id', $request->country_id)->first();
            $guestShippingToAddress = $request->except(['_token']);
            $guestShippingToAddress['country'] = $country;
            if ($country->country === 'United States') {
                $guestShippingToAddress['state'] = State::where('id', $request->state_id)->first();
            }
            Session::put('guest_shipping_to_address', $guestShippingToAddress);
            return response()->json(['message' => 'Guest Shipping Address Saved Successfully'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    //////////////////////////////////////////////////////Guest Shipping Address End////////////////////////////////////////////////////

    //////////////////////////////////////////////////////Account Billing Address Start////////////////////////////////////////////////////

    public function isAccountBillingAddressAvailable(): JsonResponse
    {
        try {
            $payload = auth()->user()->account->accountBillingAddress;
            return response()->json(['payload' => $payload], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAccountBillingAddresses(): JsonResponse
    {
        try {
            $payload = AccountBillingAddress::where('account_id', auth()->user()->account->id)->with(['country', 'state'])->get();
            return response()->json(['payload' => ['account_billing_addresses' => $payload]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAccountBillingAddress(Request $request): JsonResponse
    {
        try {
            $accountBillingAddress = AccountBillingAddress::where('id', $request->id)->with('country')->first();
            $countries = Country::where('status', 'Active')->get();
            $states = State::where('status', 'Active')->get();
            return response()->json(['payload' => ['account_billing_address' => $accountBillingAddress, 'countries' => $countries, 'states' => $states]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function saveAccountBillingAddress(AccountBillingAddressRequest $request): JsonResponse
    {
        try {
            $country = Country::where('id', $request->country_id)->first();
            $accountBillingAddress = AccountBillingAddress::find($request->id);
            $accountBillingAddress->first_name = $request->first_name;
            $accountBillingAddress->last_name = $request->last_name;
            $accountBillingAddress->country_id = $request->country_id;
            if ($country->country === 'United States') {
                $accountBillingAddress->state_id = $request->state_id;
            }
            $accountBillingAddress->city = $request->city;
            $accountBillingAddress->zip_code = $request->zip_code;
            $accountBillingAddress->address_line_1 = $request->address_line_1;
            $accountBillingAddress->address_line_2 = $request->address_line_2;
            $accountBillingAddress->phone = $request->phone;
            $accountBillingAddress->email = $request->email;
            $accountBillingAddress->save();
            return response()->json(['message' => 'Account Billing Address Saved Successfully'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    //////////////////////////////////////////////////////Account Billing Address End////////////////////////////////////////////////////

    //////////////////////////////////////////////////////Guest Billing Address Start////////////////////////////////////////////////////

    public function isGuestBillingAddressAvailable(): JsonResponse
    {
        try {
            if (Session::has('guest_billing_address')) {
                return response()->json(['payload' => Session::get('guest_billing_address')], Response::HTTP_OK);
            }
            return response()->json(['payload' => null], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getGuestBillingAddress(): JsonResponse
    {
        try {
            $payload = Session::get('guest_billing_address');
            return response()->json(['payload' => ['guest_billing_address' => $payload]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getGuestBillingAddressForEdit(): JsonResponse
    {
        try {
            $payload = Session::get('guest_billing_address');
            $countries = Country::where('status', 'Active')->get();
            $states = State::where('status', 'Active')->get();
            return response()->json(['payload' => ['guest_billing_address' => $payload, 'countries' => $countries, 'states' => $states]], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function saveGuestBillingAddress(GuestBillingAddressRequest $request): JsonResponse
    {
        try {
            $country = Country::where('id', $request->country_id)->first();
            $guestBillingAddress = $request->except(['_token']);
            $guestBillingAddress['country'] = $country;
            if ($country->country === 'United States') {
                $guestBillingAddress['state'] = State::where('id', $request->state_id)->first();
            }
            Session::put('guest_billing_address', $guestBillingAddress);
            return response()->json(['message' => 'Guest Billing Address Saved Successfully'], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    //////////////////////////////////////////////////////Guest Billing Address End////////////////////////////////////////////////////

    public function getCountryById(Request $request): JsonResponse
    {
        try {
            $payload = Country::where('id', $request->id)->first();
            return response()->json(['payload' => $payload], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getStatesByCountryId(Request $request): JsonResponse
    {
        try {
            $payload = State::where('country_id', $request->country_id)->get();
            return response()->json(['payload' => $payload], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function addProductToWatch(Request $request): JsonResponse
    {
        try {
            $product = Product::where('slug', $request->product_slug)->first();
            if (WatchedProduct::where('account_id', auth()->user()->account->id)->where('product_id', $product->id)->first()) {
                return response()->json(['message' => 'The product is already in the watched list!'], Response::HTTP_BAD_REQUEST);
            }
            $watchedProduct = new WatchedProduct();
            $watchedProduct->account_id = auth()->user()->account->id;
            $watchedProduct->product_id = $product->id;
            $watchedProduct->save();
            return response()->json(['message' => 'Product added to watched list successfully.'], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /////////////////////////////////////////////////////Card Start/////////////////////////////////////////////////////////////

    public function isAccountCardAvailable(): JsonResponse
    {
        try {
            $payload = auth()->user()->account->accountCards;
            return response()->json(['payload' => $payload], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAccountCards(Request $request): JsonResponse
    {
        try {
            $accountCards = AccountCard::where('account_id', auth()->user()->account->id)->where('is_for_stripe_customer', 1)->latest('created_at')->latest('is_default')->get();
            return response()->json(['payload' => $accountCards], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAccountCard(Request $request): JsonResponse
    {
        try {
            $accountCard = AccountCard::where('id', $request->id)->first();
            return response()->json(['payload' => $accountCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteAccountCard(Request $request): JsonResponse
    {
        try {
            $accountCard = AccountCard::where('id', $request->get('id'))->first();
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $stripe->customers->deleteSource(
                auth()->user()->account->stripe_customer_id,
                $accountCard->stripe_card_id,
                []
            );
            $accountCard->delete();
            return response()->json(['payload' => $accountCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeDefaultAccountCard(Request $request): JsonResponse
    {
        try {
            AccountCard::where('account_id', auth()->user()->account->id)->where('is_for_stripe_customer', 1)->update(['is_default' => 0]);
            $accountCard = AccountCard::where('id', $request->get('id'))->first();
            $accountCard->is_default = 1;
            $accountCard->save();
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $stripe->customers->update(
                auth()->user()->account->stripe_customer_id,
                ['default_source' => $accountCard->stripe_card_id]
            );
            return response()->json(['payload' => $accountCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function saveAccountCard(AccountCardRequest $request): JsonResponse
    {
        try {

            $stripe = new StripeClient(env('STRIPE_SECRET'));
            if ($request->has('id') && $request->get('id') !== null) {
                $accountCard = AccountCard::find($request->get('id'));
                $accountCard->name = $request->get('name');
                $accountCard->exp_month = $request->get('exp_month');
                $accountCard->exp_year = $request->get('exp_year');
                $accountCard->save();
                $stripe->customers->updateSource(
                    auth()->user()->account->stripe_customer_id,
                    $accountCard->stripe_card_id,
                    ['name' => $accountCard->name, 'exp_month' => $accountCard->exp_month, 'exp_year' => $accountCard->exp_year]
                );
            } else {
                $token = $stripe->tokens->create([
                    'card' => [
                        'number' => $request->get('number'),
                        'exp_month' => $request->get('exp_month'),
                        'exp_year' => $request->get('exp_year'),
                        'cvc' => $request->get('cvc'),
                        'name' => $request->get('name')
                    ],
                ]);
                if (!isset($token->id)) {
                    return response()->json(['message' => 'Token Generation Failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
                }

                $card = $stripe->customers->createSource(
                    auth()->user()->account->stripe_customer_id,
                    ['source' => $token->id]
                );
                $accountCard = new AccountCard();
                $accountCard->account_id = auth()->user()->account->id;
                $accountCard->stripe_card_id = $card->id;
                $accountCard->is_for_stripe_connected_account = 0;
                $accountCard->is_for_stripe_customer = 1;
                $accountCard->funding = $card->funding;
                $accountCard->last4 = $card->last4;
                $accountCard->name = $card->name;
                $accountCard->brand = $card->brand;
                $accountCard->exp_month = $card->exp_month;
                $accountCard->exp_year = $card->exp_year;
                $accountCard->is_default = empty(AccountCard::where('account_id', auth()->user()->account->id)->where('is_for_stripe_customer', 1)->where('is_default', 1)->first()) ? 1 : 0;
                $accountCard->save();

                if ($request->has('make_default') && (int)$request->get('make_default') === 1) {
                    AccountCard::where('account_id', auth()->user()->account->id)->where('is_for_stripe_customer', 1)->update(['is_default' => 0]);
                    $accountCard->is_default = 1;
                    $accountCard->save();
                    $stripe->customers->update(
                        auth()->user()->account->stripe_customer_id,
                        ['default_source' => $accountCard->stripe_card_id]
                    );
                }
            }
            return response()->json(['message' => 'Account Card Saved Successfully', 'payload' => $accountCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isGuestCardAvailable(): JsonResponse
    {
        try {
            if (Session::has('guest_card')) {
                return response()->json(['payload' => Session::get('guest_card')], Response::HTTP_OK);
            }
            return response()->json(['payload' => null], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getGuestCard(): JsonResponse
    {
        try {
            $guestCard = Session::has('guest_card') ? Session::get('guest_card') : null;
            return response()->json(['payload' => $guestCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteGuestCard(): JsonResponse
    {
        try {
            $guestCard = Session::get('guest_card');
            Session::forget('guest_card');
            return response()->json(['payload' => $guestCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function saveGuestCard(CardRequest $request): JsonResponse
    {
        try {
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $token = $stripe->tokens->create([
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => array_keys($this->months, $request->expiry_month)[0],
                    'exp_year' => $request->expiry_year,
                    'cvc' => $request->security_code,
                ],
            ]);
            if (!isset($token->id)) {
                return response()->json(['message' => 'Token Generation Failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $guestCard = $request->except(['_token']);
            $guestCard['card_brand'] = $token->card->brand;
            Session::put('guest_card', $guestCard);
            return response()->json(['message' => 'Guest Card Saved Successfully', 'payload' => $guestCard], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /////////////////////////////////////////////////////Card End/////////////////////////////////////////////////////////////
}

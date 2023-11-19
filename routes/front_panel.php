<?php
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FrontPanel\HomeController;


use \App\Http\Controllers\FrontPanel\SignInController;
use \App\Http\Controllers\FrontPanel\RegistrationController;
use \App\Http\Controllers\FrontPanel\VerificationController;




Route::group([], __DIR__ . '/FrontPanel/common.php');


////////////////////////////////////////////////////////////HOME PAGE////////////////////////////////////////////////////////////////////////////////
Route::get('/', [HomeController::class, 'loadHome']);
Route::get('/get/category/types', [HomeController::class, 'getCategoryTypes']);
Route::get('/get/hot/deal/items', [HomeController::class, 'getHotDealItems']);
Route::get('/get/featured/product/items', [HomeController::class, 'getFeaturedProductItems']);




////////////////////////////////////////////////////////////ACCOUNT SIGN IN AND SIGN OUT////////////////////////////////////////////////////////////////////////////////
Route::get('/sign-in', [SignInController::class, 'loadSignIn']);
Route::post('/authenticate/sign/in', [SignInController::class, 'authenticateSignIn']);

Route::get('/auth/redirect/to/{provider}/{where_to}', [SignInController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SignInController::class, 'handleProviderCallback']);


////////////////////////////////////////////////////////////ACCOUNT REGISTRATION////////////////////////////////////////////////////////////////////////////////
Route::get('/register/{id?}', [RegistrationController::class, 'loadRegistration']);
Route::post('/register/personal/account', [RegistrationController::class, 'registerPersonalAccount']);
Route::post('/register/business/account', [RegistrationController::class, 'registerBusinessAccount']);

////////////////////////////////////////////////////////////ACCOUNT VERIFICATION////////////////////////////////////////////////////////////////////////////////
Route::get('/email-verification', [VerificationController::class, 'loadEmailVerification']);
Route::post('/verify/email', [VerificationController::class, 'verifyEmail']);
Route::get('/resend/verification/code/for/pending/account', [VerificationController::class, 'resendVerificationCode']);








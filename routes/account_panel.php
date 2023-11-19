<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPanel\SignInController;

Route::group([], __DIR__ . '/AccountPanel/common.php');
Route::group(['prefix' => 'overview'], __DIR__ . '/AccountPanel/overview.php');



Route::get('/sign/out', [SignInController::class, 'signOut']);



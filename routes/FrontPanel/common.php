<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\FrontPanel\CommonController;

Route::get('/check/account/login/status', [CommonController::class, 'checkAccountLoginStatus']);
Route::get('/get/country/by/id', [CommonController::class, 'getCountryById']);
Route::get('/get/states/by/country/id', [CommonController::class, 'getStatesByCountryId']);






<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AccountPanel\CommonController;

Route::get('/get/user', [CommonController::class, 'getUser']);



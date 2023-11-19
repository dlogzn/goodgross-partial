<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AccountPanel\OverviewController;

Route::get('/', [OverviewController::class, 'loadOverview']);


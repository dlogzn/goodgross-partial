<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/clear-cache', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return response()->json('all cache cleared');
});

Route::group(['middleware' => 'allow.front.panel.access'], __DIR__ . '/front_panel.php');
Route::group(['prefix' => 'account/panel', 'middleware' => 'allow.account.panel.access'], __DIR__ . '/account_panel.php');
Route::get('/count/cart/items', [\App\Http\Controllers\CommonController::class, 'countCartItems']);







Route::fallback(function () {
    $title = 'Page Not Found';
    if (auth()->check() && auth()->user()->for === 'Account Panel') {
        $activeNav = '';
        return response()->view('errors.AccountPanel.404', compact('title', 'activeNav'), 404);
    } else if (auth()->check() && auth()->user()->for === 'Control Panel') {
        return response()->view('errors.ControlPanel.404', compact('title'), 404);
    } else {
        return response()->view('errors.FrontPanel.404', compact('title'), 404);
    }
});










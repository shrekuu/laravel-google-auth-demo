<?php

use App\Http\Controllers\Settings\AccountController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/settings/account', function () {
  return view('settings.account');
});

Route::delete('/settings/account', [AccountController::class , 'destroy']);

Route::get('/help/privacy', function () {
  return view('help.privacy');
});

Route::get('/help/terms', function () {
  return view('help.terms');
});

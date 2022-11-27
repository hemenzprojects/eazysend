<?php

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

Route::group(['prefix' => 'admin'], function () {
  Route::get('/home', function () {
    return view('admin.home');
});

  Route::get('/login', '\App\Http\Controllers\AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', '\App\Http\Controllers\AdminAuth\LoginController@login');
  Route::post('/logout', '\App\Http\Controllers\AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', '\App\Http\Controllers\AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', '\App\Http\Controllers\AdminAuth\RegisterController@register');

  Route::post('/password/email', '\App\Http\Controllers\AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', '\App\Http\Controllers\AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', '\App\Http\Controllers\AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', '\App\Http\Controllers\AdminAuth\ResetPasswordController@showResetForm');
});

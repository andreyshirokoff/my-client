<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/price-page', function () {
    return view('price-page');
});

Route::get('/confirm-reset', function () {
    return view('confirm-reset');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/reset', function () {
    return view('reset');
});
Route::get('/reset-code', function () {
    return view('reset-code');
});
Route::get('/signup', function () {
    return view('signup');
});





Route::get('/user-page', function () {
    return view('user-page');
});
Route::get('/user-page/packet-change', function () {
    return view('packet-change');
});
Route::get('/user-page/sms-packets', function () {
    return view('sms-packets');
});
Route::get('/user-page/help-page', function () {
    return view('help-page');
});
Route::get('/user-page/info-page', function () {
    return view('info-page');
});

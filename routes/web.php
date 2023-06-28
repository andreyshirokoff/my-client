<?php

use App\Models\Tariff;
use App\Models\UserRequisite;
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
//Route::get('/test', function (){
//    $user = Auth::user();
//    \App\Http\Controllers\HomeController::getHistory($user->id);
//});
Route::view('/test-verify', 'test-verify');
Route::view('/test-news-edit', 'test-news-edit');
Route::post('/quest-send', [\App\Http\Controllers\AjaxController::class, 'questSend'])->name('quest.send');
Route::view('/home', 'home')->middleware(['auth', 'verified']);
//Route::get('/home', function () {
//    $user = Auth::user();
//    $userRequisite = UserRequisite::where('user_id', $user->id)->first();
//
//    $phone = preg_replace('/[^0-9+]/', '', $user->phone);
//    $phone = str_replace(['+', ' ', '-'], '+', $phone);
//    $phone = '+' . substr($phone, 1, 3) . ' ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9);
//
//
//
//    return view('home', ['userRequisite' => $userRequisite, 'phone' => $phone]);
//})->middleware('auth');
Route::post('/home/save-requisites', [\App\Http\Controllers\AjaxController::class, 'saveRequisites'])->name('add.req')->middleware(['auth', 'verified']);
Route::post('/home/try-tariff', [\App\Http\Controllers\AjaxController::class, 'tryTariff'])->name('try.tariff')->middleware(['auth', 'verified']);
Route::post('/home/try-packet', [\App\Http\Controllers\AjaxController::class, 'tryPacket'])->name('try.packet')->middleware(['auth', 'verified']);
Route::post('/home/tech-send', [\App\Http\Controllers\AjaxController::class, 'techSend'])->name('tech.send')->middleware(['auth', 'verified']);
Route::post('/home/phone-verify', [\App\Http\Controllers\AjaxController::class, 'phoneVerify'])->name('phone.verify')->middleware(['auth', 'verified']);
Route::view('/home/edit', 'profile.edit')->middleware(['auth', 'verified']);
Route::view('/home/password', 'profile.password')->middleware(['auth', 'verified']);


Route::get('/price-page', function () {
    return view('price-page');
});

Route::get('/confirm-reset', function () {
    return view('confirm-reset');
});
//remove
//Route::get('/login1', function () {
//    return view('login1');
//});
Route::get('/reset', function () {
    return view('reset');
});
Route::get('/reset-code', function () {
    return view('reset-code');
});
//remove
//Route::get('/signup', function () {
//    return view('signup');
//});





//Route::get('/home', function () {
//    return view('home');
//});
Route::get('/home/packet-change', function () {
    return view('packet-change');
})->middleware(['auth', 'verified']);
Route::get('/home/change-ava', function () {
    return view('change-ava');
})->middleware(['auth', 'verified']);
Route::get('/home/sms-packets', function () {
    return view('sms-packets');
})->middleware(['auth', 'verified']);
Route::get('/home/help-page', function () {
    return view('help-page');
})->middleware(['auth', 'verified']);
Route::get('/home/info-page', function () {
    return view('info-page');
})->middleware(['auth', 'verified']);



//Route::get('/nova', function(){
//    return view('nova.path');
//})->middleware(['auth', 'role:admin'])->name('nova.path');





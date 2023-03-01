<?php

use App\Http\Controllers\MainController;
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

Route::post('/send', 'App\Http\Controllers\MailsController@sendEmail')->name('mail');

Route::post('/subscribe-newsletter', [MainController::class, 'subscribe'])->name('subscribe');
Route::post('/mail', [MainController::class, 'postMail']);

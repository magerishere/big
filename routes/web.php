<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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
    return view('frontend.index');
})->name('index');


Route::get('/authorization',function() {
    return view('frontend.authorization.index');
})->name('authorization');


Route::get('/dashboard',function() {
    return view('backend.index');
})->name('dashboard');

Route::get('/messages',function() {
    return view('backend.messages.index');
})->name('messages');
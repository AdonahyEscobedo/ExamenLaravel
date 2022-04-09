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
    return view('index');
});

Route::get('Reunidittos', function () {
    return view('Reunidittos');
});

Route::get('Escuadron', function () {
    return view('Escuadron');
});

Route::get('Extras', function () {
    return view('Extras');
});
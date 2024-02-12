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
    return view('home');
});

Route::get('/comic', function () {
    $comics = config('comics');

    return view('comic', compact('comics'));
})->name('comic');

Route::get('/charachters', function () {
    return view('characters');
})->name('characters');

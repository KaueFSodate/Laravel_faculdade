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
    return view('Pages.index');
});

Route::get('/profile', function () {
    return view('Pages.profile');
});

Route::get('/library', function () {
    return view('Pages.library');
});

Route::get('/mostPopular', function () {
    return view('Pages.mostPopular');
});

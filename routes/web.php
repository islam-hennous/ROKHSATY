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
    return view('home');
});


Route::get('/moukhalafat', function () {
    return view('mokhalafat');
})->name('moukhalafat');

Route::get('/roukhsati', function () {
    return view('rokhsaty');
})->name('roukhsati');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/laravel', function () {
    return view('welcome');
});

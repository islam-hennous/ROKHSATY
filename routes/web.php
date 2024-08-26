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
    return view('client.home');
})->name('client.home');

Route::get('/data', function () {
    return view('client.show-data');
})->name('data');

Route::group(['prefix' => 'mokhalafat'], function () {


    Route::get('/1', function () {
        return view('client.mokhalafat.1');
    })->name('moukhalafat-1');

    Route::get('/2', function () {
        return view('client.mokhalafat.2');
    })->name('moukhalafat-2');

    Route::get('/3', function () {
        return view('client.mokhalafat.3');
    })->name('moukhalafat-3');

    Route::get('/4', function () {
        return view('client.mokhalafat.4');
    })->name('moukhalafat-4');

    Route::get('/5', function () {
        return view('client.mokhalafat.5');
    })->name('moukhalafat-5');


});

Route::get('/blog', function () {
    return view('client.blog.index');
})->name('client.blog');

Route::get('/blog-single', function () {
    return view('client.blog.single');
})->name('client.blog-single');

Route::get('/contact', function () {
    return view('client.contact');
})->name('client.contact');





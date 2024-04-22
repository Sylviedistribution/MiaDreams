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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('index');




//Nos marques
Route::get('/miaDreams', function () {
    return view('nosMarques.miaDreams');
})->name('miaDreams');

Route::get('/mprew', function () {
    return view('nosMarques.mprew');
})->name('mprew');

Route::get('/personalBranding', function () {
    return view('nosMarques.personalBranding');
})->name('personalBranding');

Route::get('/fashionProgram', function () {
    return view('nosMarques.fashionProgram');
})->name('fashionProgram');




//Journal
Route::get('/aPropos', function () {
    return view('aPropos');
})->name('aPropos');

//Impact
Route::get('/impact', function () {
    return view('impact');
})->name('impact');


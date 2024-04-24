<?php

use App\Http\Controllers\FilamentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\DownloadController;
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

Route::get('/index', function () {
    return view('index');
})->name('index');;


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
Route::get('/apropos', function () {
    return view('a-propos');
})->name('apropos');

//Impact
Route::get('/impact', function () {
    return view('impact');
})->name('impact');

// Newsletter

//Route::post('newsletter','NewsletterController@store')->name('newsletter');
Route::controller(NewsletterController::class)->group(function () {
    Route::get('newsletter','index')->name('newsletter.list');
    Route::get('newsletter/create', 'create')->name('newsletter.create');
    Route::post('newsletter/store', 'store')->name('newsletter.store');
    Route::get('newsletter/edit/{id}', 'edit')->name('newsletter.edit');
    Route::post('newsletter/update/{carte}', 'update')->name('newsletter.update');
    Route::get('newsletter/destroy/{id}', 'destroy')->name('newsletter.destroy');
});

//Telecharger documents
Route::controller(DownloadController::class)->group(function () {
    Route::get('/download/{document}', 'download')->name('download');
});

//Partie admin Filament
Route::get('admin', [FilamentController::class, 'index'])->name('filament.dashboard');

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


// Home Page
Route::get('/', function () {
    $comics = config('comics');
    $bluemenu = config('blueMenu');
    $footermenu = config('footerMenu');
    $navelements = config('navElements');
    return view(
        'home',
        compact(
            'comics',
            'bluemenu',
            'footermenu',
            'navelements'
        )
    );
})->name('home');


// Comic Page
Route::get('/comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];

    $footermenu = config('footerMenu');
    $navelements = config('navElements');
    return view('comic', compact(
        'comic',
        'footermenu',
        'navelements'
    ));
})->name('comic');

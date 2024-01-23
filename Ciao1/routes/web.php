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


Route::get('/home', function () {
    return view('home', ['name' => 'Ciao']);
});


Route::get('/articoli', function () {
    return view('articoli');
});


Route::get('/chisono', function () {
    
    
    return view('chisono', ['testo'=>'Ciao, mi chiamo samuele e sono un ragazzo di 19 anni ....']);
});

Route::get('/chiSono', function () {
    
    
    return view('chiSono', ['testo'=>'Ciao, mi chiamo samuele e sono un ragazzo di 19 anni ....']);
});

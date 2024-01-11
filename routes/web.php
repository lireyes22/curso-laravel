<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/custom', function () {
    return view('custom',['msj'=>'hola']);
})->name('custom');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
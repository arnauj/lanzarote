<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario/{id}', function ($id) {
    $prueba = 'asdfasdfas';
    return view('playas',compact('id','prueba'));
});
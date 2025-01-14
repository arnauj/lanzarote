<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Playas;
use App\Http\Controllers\Usuario;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\LibroController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', function () {
    return "login";
})->name('login');


Route::get('/usuario/{id}', function ($id) {
    $prueba = 'asdfasdfas';
    return view('playas',compact('id','prueba'));
});


Route::get('/playas/{id}', [Playas::class, 'playas_de_arena']);



Route::get('/perfil', function () {
    return view('welcome');
})->middleware('auth');



Route::get('/usuarios'     , [Usuario::class, 'index']);
Route::get('/usuarios/{id}', [Usuario::class, 'show']);



Route::post('/procesar-datos', [DatosController::class, 'procesar']);

Route::get('/procesar-datos'     , [DatosController::class, 'form_procesar']);
Route::get('/alta-libro-tolkien' , [LibroController::class, 'alta_libro']);
Route::get('/mostrar-libro-tolkien/{id}' , [LibroController::class, 'mostrar_libro']);
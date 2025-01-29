<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DatosController;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/libros'       , [LibroController::class, 'listado'])->name('libros.listado');


Route::get('/libro/{id}'            , [LibroController::class, 'mostrar'])->name('libros.mostrar');
Route::get('/libro/actualizar/{id}' , [LibroController::class, 'actualizar'])->name('libros.actualizar');
Route::get('/libro/eliminar/{id}'   , [LibroController::class, 'eliminar'])->name('libros.eliminar');
Route::get('/libros/nuevo'          , [LibroController::class, 'alta'])->name('libros.alta');
Route::post('/libros/nuevo'         , [LibroController::class, 'almacenar'])->name('libros.almacenar');


Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');



require __DIR__.'/auth.php';

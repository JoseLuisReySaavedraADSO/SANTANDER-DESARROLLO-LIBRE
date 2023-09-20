<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(); 


// RUTAS ADMINISTRADOR

// RUTA CONTROL MASCOTAS
Route::get('/dashboard', [App\Http\Controllers\PetController::class, 'index'])->name('dashboard');
// RUTA AÑADIR MASCOTAS
Route::get('/add', [App\Http\Controllers\PetController::class, 'create'])->name('add');
// RUTA SIN DEFINIR
Route::post('/store', [App\Http\Controllers\PetController::class, 'store'])->name('store');
// RUTA SIN DEFINIR
Route::get('/show/{id}', [App\Http\Controllers\PetController::class, 'show'])->name('show');
Route::delete('/delete/{id}', [App\Http\Controllers\PetController::class, 'destroy'])->name('delete');



// RUTAS ANIMALES

// RUTA PERROS
Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexdogs'])->name('dogs');
// RUTA GATOS
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'indexcats'])->name('cats');
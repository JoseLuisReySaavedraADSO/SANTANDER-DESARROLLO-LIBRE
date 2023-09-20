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
// RUTA VISTA AÑADIR MASCOTAS
Route::get('/add', [App\Http\Controllers\PetController::class, 'create'])->name('add');
// RUTA AÑADIR MASCOTAS
Route::post('/store', [App\Http\Controllers\PetController::class, 'store'])->name('store');
// RUTA VER MASCOTAS
Route::get('/show/{id}', [App\Http\Controllers\PetController::class, 'show'])->name('show');
// RUTA ELIMINAR MASCOTAS
Route::delete('/delete/{id}', [App\Http\Controllers\PetController::class, 'destroy'])->name('delete');
// RUTA VISTA EDITAR MASCOTAS
Route::get('/edit/{id}', [App\Http\Controllers\PetController::class, 'edit'])->name('edit');
// RUTA EDITAR MASCOTAS
Route::post('/update/{id}', [App\Http\Controllers\PetController::class, 'update'])->name('update');

// RUTAS ANIMALES

// RUTA PERROS
Route::get('/dogs', [App\Http\Controllers\HomeController::class, 'indexdogs'])->name('dogs');
// RUTA GATOS
Route::get('/cats', [App\Http\Controllers\HomeController::class, 'indexcats'])->name('cats');
 
//RUTA PARA ERRORES
Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('error');

// RUTA DETALLE MASCOTA
Route::get('/pets/details/{id}', [App\Http\Controllers\HomeController::class, 'indexdetails'])->name('details');

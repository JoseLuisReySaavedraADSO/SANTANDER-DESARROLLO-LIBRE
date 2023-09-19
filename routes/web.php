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

Route::get('/dashboard', [App\Http\Controllers\PetController::class, 'index'])->name('dashboard');
Route::get('/add', [App\Http\Controllers\PetController::class, 'create'])->name('add');
Route::post('/store', [App\Http\Controllers\PetController::class, 'store'])->name('store');
Route::get('/show/{id}', [App\Http\Controllers\PetController::class, 'show'])->name('show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homecats', [App\Http\Controllers\HomeController::class, 'indexcats'])->name('homecats');
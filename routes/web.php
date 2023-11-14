<?php

use App\Http\Controllers\project;
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
Route::get('/login', [project::class,'login'])->name('login');
Route::get('/affiche', [project::class,'affiche'])->name('affiche')->middleware('auth');
Route::post('/verification', [project::class,'verification'])->name('verification');
Route::post('/logout', [project::class,'logout'])->name('logout');


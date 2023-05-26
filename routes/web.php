<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\InformaController;
use App\Http\Controllers\IayudaController;
use App\Http\Controllers\AyudaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('grupos', App\Http\Controllers\GrupoController::class);
Route::resource('grados', App\Http\Controllers\GradoController::class);
Route::resource('temas', App\Http\Controllers\temaController::class);
Route::resource('instituciones', App\Http\Controllers\InstitucioneController::class);
Route::resource('apoyos', App\Http\Controllers\ApoyoController::class);
Route::resource('recursos', App\Http\Controllers\RecursoController::class);

Route::get('/principal', [App\Http\Controllers\PrincipalController::class, 'index'])->name('principal');
Route::get('/informacion/{id}', [InformaController::class, 'show'])->name('informacion');

Route::get('/pinstituciones', [App\Http\Controllers\AyudaController::class, 'index'])->name('pinstituciones');
Route::get('/iayuda/{id}', [IayudaController::class, 'show'])->name('iayuda');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

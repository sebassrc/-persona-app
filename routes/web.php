<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;


use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//Rutas de comunas
Route::get('/comunas', [ComunaController::class, 'index']);
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destrory'])->name('comunas.destrory');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');


//Rutas de municipios
Route::get('/municipios', [MunicipioController::class, 'index']);
Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');



//Rutas de departamentos
Route::get('/departamentos', [DepartamentoController::class, 'index']);
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');

//Rutas de pais
Route::get('/paises', [PaisController::class, 'index']);
Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');
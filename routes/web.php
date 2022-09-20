<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;

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
    return view('principal');
});


Route::get('/Datos/registro',[DatosController::class,'create'])->name('datos.registro');
Route::post('/Datos/guardar',[DatosController::class,'guardar'])->name('datos.guardar');
Route::get('/Datos/list',[DatosController::class,'list'])->name('datos.list');
Route::get('/Datos/edit/{iden}',[DatosController::class,'edit'])->name('datos.edit');
Route::put('Datos/{dat}', [DatosController::class, 'update'])->name('datos.update');
Route::get('Datos/delete{iden}', [DatosController::class, 'delete'])->name('datos.delete');
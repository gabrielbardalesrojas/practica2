<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RecintoActividadController;
use App\Http\Controllers\EspecieCuidadorController;

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AnimalActividadController;
use App\Http\Controllers\AnimalCuidadorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

Route::resource('/Animal', AnimalController::class);
Route::resource('/Especie', EspecieController::class);
Route::resource('/Recinto', RecintoController::class);
Route::resource('/Cuidador', CuidadorController::class);
Route::resource('/Actividad', ActividadController::class);
Route::resource('/RecintoActividad', RecintoActividadController::class);
Route::resource('/AnimalCuidador', AnimalCuidadorController::class);
Route::resource('/EspecieCuidador', EspecieCuidadorController::class);


    return $request->user();
});

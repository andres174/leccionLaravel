<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;
use App\Http\Livewire\JugadoresEquipoComponent;


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
/* Route::get('Reporte', [JugadorController::class, 'mostrar']);
Route::get('generarReporte', [JugadorController::class, 'generarReporte']); */

Route::get('generarReporte', [JugadoresEquipoComponent::class, 'generarReporte']);
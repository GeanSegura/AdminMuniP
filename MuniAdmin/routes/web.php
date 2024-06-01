<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadoraController;

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
    return view('PortalMuni');
});
// Route::get('/', [calculadoraController::class, 'mostrarCalculadora']);
// Route::get('/calculadora',[calculadoraController::class,'mostrarCalculadora']);
// Route::post('/calculadora', [CalculadoraController::class, 'sumar']);

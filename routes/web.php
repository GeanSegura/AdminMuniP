<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadoraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\modificarApiUsuarioController;


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

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

// Route::get('/', [calculadoraController::class, 'mostrarCalculadora']);
// Route::get('/calculadora',[calculadoraController::class,'mostrarCalculadora']);
// Route::post('/calculadora', [CalculadoraController::class, 'sumar']);




Route::get('/Api', function () {
    return view('blank-page');
});


Route::get('/Api/help', function () {
    return view('apiDocumentacion'); // Suponiendo que "/swagger" es la ruta de tu documentación Swagger
});
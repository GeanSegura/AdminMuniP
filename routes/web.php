<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\modificarApiUsuarioController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;


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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [MainMenuController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/worker/dashboard', [MainMenuController::class, 'workerDashboard'])->name('worker.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});
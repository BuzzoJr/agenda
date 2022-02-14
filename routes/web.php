<?php

namespace App\Http\Controllers;
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
    return redirect()->route('login.index');
});
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name("login.index");
Route::post('/login', [LoginController::class, 'autenticar'])->name("login.index");
Route::get('/cadastro', [LoginController::class, 'create'])->name("login.manage");
Route::post('/cadastro', [LoginController::class, 'store'])->name("login.manage");

Route::middleware('autenticacao')->prefix('/app')->group(function () {
Route::get('/agenda', [AgendaController::class, 'index'])->name("agenda.index");
Route::get('/contato', [AgendaController::class, 'create'])->name("agenda.manage");
Route::post('/contato', [AgendaController::class, 'store'])->name("agenda.manage");
Route::get('/sair', [LoginController::class, 'destroy'])->name("login.logout");
});
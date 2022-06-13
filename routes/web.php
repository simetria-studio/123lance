<?php

use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserCadastroController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//front routes
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('cadastro', [UserCadastroController::class, 'index'])->name('cadastro');


Route::get('produto', [HomeController::class, 'lance'])->name('produto.lance');
Route::get('/dashboard', [PainelController::class, 'index'])->name('dashboard');
Route::get('/pedidos', [PainelController::class, 'pedidos'])->name('pedidos');
Route::get('todos-produtos', [HomeController::class, 'allProducts'])->name('todos.produtos');

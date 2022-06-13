<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Front\UserRegisterController;

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
Route::get('user-register', [UserRegisterController::class, 'index'])->name('cadastro');


Route::get('auction', [HomeController::class, 'bid'])->name('produto.lance');
Route::get('/dashboard', [PainelController::class, 'index'])->name('dashboard');
Route::get('/orders', [PainelController::class, 'pedidos'])->name('pedidos');
Route::get('all-auctions', [HomeController::class, 'allProducts'])->name('todos.produtos');
Route::get('auction-bought', [HomeController::class, 'auctionBought'])->name('leiloes.arrematados');

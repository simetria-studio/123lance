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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('user-register', [UserRegisterController::class, 'index'])->name('cadastro');


//painel routes
Route::get('/dashboard', [PainelController::class, 'index'])->name('dashboard');
Route::get('/orders', [PainelController::class, 'orders'])->name('pedidos');
Route::get('/products', [PainelController::class, 'products'])->name('produtos');



//front routes
Route::get('auction', [HomeController::class, 'bid'])->name('produto.lance');
Route::get('all-auctions', [HomeController::class, 'allProducts'])->name('todos.produtos');
Route::get('auction-bought', [HomeController::class, 'auctionBought'])->name('leiloes.arrematados');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('how-it-works', [HomeController::class, 'howItWorks'])->name('como.funciona');
Route::get('privacy-policies', [HomeController::class, 'privacy'])->name('politicas.privacidade');
Route::get('privacy-cookies', [HomeController::class, 'cookies'])->name('politicas.cookies');
Route::get('terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('termos');
Route::get('delivery-policies', [HomeController::class, 'delivery'])->name('politicas.entrega');
Route::get('refound-policies', [HomeController::class, 'refound'])->name('politicas.reembolso');
Route::get('testimonials', [HomeController::class, 'testimonials'])->name('depoimentos');
Route::get('buy-bid', [HomeController::class, 'buyBid'])->name('compra.lance');


Route::get('admin-login', function () {
    return view('admin.login');
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class,'welcome'])->name('welcome.index')->middleware('guest');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Admin actions
Route::get('/home', [AdminController::class,'index'])->name('home.index')->middleware('auth');
Route::post('/Nuevo-Admin', [AdminController::class,'create'])->name('newAdmin')->middleware('auth');
Route::get('/Funcionarios', [AdminController::class,'view'])->name('officials')->middleware('auth');
Route::delete('/Borrar-Funcionarios/{fact}', [AdminController::class,'destroy'])->name('destroy.user')->middleware('auth');

//Shopping actions

Route::get('/cart', [ShoppingController::class, 'cart'])->name('cart')->middleware('auth');
Route::post('/cart-product', [ShoppingController::class, 'productCart'])->name('cart-product');
Route::get('/payment', [ShoppingController::class, 'payment'])->name('payment')->middleware('auth');
Route::get('/confirmation', [ShoppingController::class, 'confirmation'])->name('confirmation')->middleware('auth');
Route::get('/products', [ProductsController::class,'index'])->name('products');
Route::get('/products/{id}', [ProductsController::class,'productList'])->name('productList');
Route::get('/products/catalogues/{catalogue}',[ProductsController::class,'catalogues'])->name('catalogues');
Route::delete('/Cancelar-Compra/{id}',[ShoppingController::class,'cancelPurchase'])->name('cancelPurchase');

//Shopping actions

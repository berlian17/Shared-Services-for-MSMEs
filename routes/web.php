<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::prefix('/order')->group(function() {
        Route::get('/', [OrderController::class, 'index'])->name('order.index');
        Route::get('/input', [OrderController::class, 'inputOrderpage'])->name('order.inputpage');
        Route::post('/input', [OrderController::class, 'inputOrder'])->name('order.input');
        Route::get('/edit/{id}', [OrderController::class, 'orderEdit'])->name('order.edit');
        Route::post('/update{id}', [OrderController::class, 'orderUpdate'])->name('order.update');
        Route::get('/delete/{id}', [OrderController::class, 'deleteOrder'])->name('order.delete');
        Route::get('/update-status', [OrderController::class, 'updateStatuspage'])->name('order.editStatuspage');
        Route::post('/update-status/{id}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
    });
    
    Route::prefix('/product')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/add', [ProductController::class, 'addProductpage'])->name('product.addpage');
        Route::post('/add', [ProductController::class, 'addProduct'])->name('product.add');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
    });
    
    Route::prefix('/customer')->group(function() {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/add', [CustomerController::class, 'addCustomerpage'])->name('customer.addpage');
        Route::post('/add', [CustomerController::class, 'addCustomer'])->name('customer.add');
        Route::get('/delete/{id}', [CustomerController::class, 'deleteCustomer'])->name('customer.delete');
    });
});

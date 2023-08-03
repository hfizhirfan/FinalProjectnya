<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderadminController;
use Illuminate\Support\Facades\Auth;    

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
    return view('home');
});

Route::get('/order/create/{id}',[OrderController::class, 'create'])->name('order.create');

Route::resource('order', OrderController::class);

Route::get('exportPdf/{id}', [OrderController::class, 'exportPdf'])->name('order.exportPdf');

Route::get('/home', HomeController::class, 'index')->name('home');


Auth::routes([
    'register' => false,
]);

// untuk admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/kategori', TypeController::class);
    Route::resource('/product', ProductController::class );
    Route::resource('/transaksi', OrderadminController::class );
    Route::get('download-file/{productId}', [ProductController::class, 'downloadFile'])->name('product.downloadFile');
    Route::get('exportExcel', [OrderadminController::class, 'exportExcel'])->name('transaksi.exportExcel');
});


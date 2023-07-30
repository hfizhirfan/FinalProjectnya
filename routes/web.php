<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

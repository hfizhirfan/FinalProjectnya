<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;

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

Route::get('home', function () {return view('home',['pagetitle'=>'Home']);})->name('home');
Route::redirect('/','home');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('menu', ProductController::class);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');
// Route::resource('/employees', EmployeeController::class);
// Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
// Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');;


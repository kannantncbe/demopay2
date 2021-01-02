<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('products', [ProductController::class, 'getProducts'])->name('products.list');

Route::middleware(['auth:sanctum', 'verified'])->get('purchase/{proid}', [ProductController::class, 'purchase']);

Route::middleware(['auth:sanctum', 'verified'])->post('propurchase', [ProductController::class, 'propurchase'])->name('products.purchase');

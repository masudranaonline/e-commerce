<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Website/Index', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//     ]);
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
Route::get('/products', [WebsiteController::class, 'products'])->name('products');
Route::get('/product-details', [WebsiteController::class, 'productDetails'])->name('product.details');
Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
Route::get('/payment', [WebsiteController::class, 'payment'])->name('payment');

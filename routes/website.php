<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Website\HomeController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [WebsiteController::class, 'cart']);
Route::get('/products', [WebsiteController::class, 'products']);
Route::get('/product-details' , [WebsiteController::class, 'productDetails']);
Route::get('/checkout' , [WebsiteController::class, 'checkout']);
Route::get('/payment' , [WebsiteController::class, 'payment']);

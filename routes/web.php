<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VendorController;
use App\Models\Admin\Setting;

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

require __DIR__.'/website.php';

Route::group(['prefix' => 'cp'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('products', ProductController::class);
    Route::resource('vendors', VendorController::class);
    Route::resource('settings', SettingController::class);

    Route::get('/trashlist', [ProductController::class, 'trashList'])->name('products.trashList');
    Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
    Route::delete('/forceDelete/{product}', [ProductController::class, 'forceDelete'])->name('product.forceDelete');

    

})->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);

// Route::get('/webpage', [WebpageController::class, 'index'])->name('webpage');

<?php


use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;

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


Route::group(['prefix' => 'cp'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('products', ProductController::class);
})->middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',]);

// Route::get('/webpage', [WebpageController::class, 'index'])->name('webpage');

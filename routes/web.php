<?php

use App\Http\Controllers\DashboardController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\WebsiteController;

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
})->middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',]);

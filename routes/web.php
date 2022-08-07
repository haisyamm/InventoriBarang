<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Start Master ============================
    // Assets
    Route::get('/master/assets', [App\Http\Controllers\Master\AssetsController::class, 'index'])->name('master.assets');
    // Regional
    Route::get('/master/regional', [App\Http\Controllers\Master\RegionalController::class, 'index'])->name('master.regional');
    // Vendor
    Route::get('/master/vendor', [App\Http\Controllers\Master\VendorController::class, 'index'])->name('master.vendor');
    // Outlet
    Route::get('/master/outlet', [App\Http\Controllers\Master\OutletController::class, 'index'])->name('master.outlet');
    // End Master ============================
    // Start Management ======================
    Route::get('/assets_management/order', [App\Http\Controllers\Management\OrderController::class, 'index'])->name('assets_management.order');
    Route::get('/assets_management/release', [App\Http\Controllers\Management\ReleaseController::class, 'index'])->name('assets_management.release');
});

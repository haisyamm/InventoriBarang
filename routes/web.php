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
    // return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Start Master ============================
    // Assets
    Route::get('/master/assets', [App\Http\Controllers\Master\AssetsController::class, 'index'])->name('master.assets');
    Route::get('/master/assets/create', [App\Http\Controllers\Master\AssetsController::class, 'create'])->name('master.assets.create');
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
    // Order ================================
    Route::get('/order/create', [App\Http\Controllers\Management\OrderController::class, 'create'])->name('order.create');
    // Order ================================
    // Release ==============================
    Route::get('/release/create', [App\Http\Controllers\Management\ReleaseController::class, 'create'])->name('release.create');
    // Release ==============================
    // Inventori ============================
    Route::get('/inventory', [App\Http\Controllers\Inventory\InventoryController::class, 'index'])->name('inventory');
    // Inventori ============================
    Route::get('/maintenance/periods', [App\Http\Controllers\MaintenancePeriodController::class, 'index'])->name('maintenanceperiod');
    // Maintenance ============================
    Route::get('/maintenance/periods/create', [App\Http\Controllers\MaintenancePeriodController::class, 'create'])->name('maintenanceperiod.create');
    // Maintenance ============================

});

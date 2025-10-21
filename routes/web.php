<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

// Redirect root ke halaman dashboard produk
Route::get('/', function () {
    return redirect()->route('products.index');
});

// ROUTE UNTUK UTS
Route::prefix('uts')->group(function () {
    Route::get('/', [UtsController::class, 'index'])->name('uts.index');
    Route::get('/pemrograman-web', [UtsController::class, 'pemrogramanWeb'])->name('uts.pemrograman_web');
    Route::get('/database', [UtsController::class, 'database'])->name('uts.database');
});

// ROUTE UNTUK PRODUCT
Route::resource('products', ProductController::class);

// ROUTE UNTUK SUPPLIER
// Route::prefix('supplier')->group(function () {
//     Route::get('/', [SupplierController::class, 'index'])->name('supplier.index');
//     Route::get('/create', [SupplierController::class, 'create'])->name('supplier.create');
//     Route::post('/', [SupplierController::class, 'store'])->name('supplier.store');
// });

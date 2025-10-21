<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\ProductController;
use App\Http\Middleware\RoleCheck;

Route::middleware(['auth','role:admin,owner'])->group(function () {
    Route::get('/product/{angka}', [ProductController::class, 'index'])
        ->name('product.index');
});

Route::resource('products', ProductController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produk/{nilai}', [ProductController::class, 'index']);

Route::get('/blog', function () {

    return view('blog.index');
})->name('blog.index');

Route::get('/hello', function () {
    return 'Hello World';
})->name('hello');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

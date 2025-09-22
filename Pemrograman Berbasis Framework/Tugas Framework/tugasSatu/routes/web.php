<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', function () {
    // nanti bisa diganti pakai controller
    return view('blog.index');  // pastikan view-nya ada di resources/views/blog/index.blade.php
})->name('blog.index');

Route::get('/hello', function () {
    return 'Hello World'; // bisa diganti ke view
})->name('hello');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');


Route::get('/about', function () {
    return view('about');  // pastikan ada resources/views/about.blade.php
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

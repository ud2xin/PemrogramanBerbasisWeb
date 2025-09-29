<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UTSController;
use Illuminate\Support\Facades\Route;

Route::get('/uts', [UTSController::class, 'index']);
Route::get('/uts/pemrograman-web', [UTSController::class, 'pemrogramanWeb']);
Route::get('/uts/database', [UTSController::class, 'database']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

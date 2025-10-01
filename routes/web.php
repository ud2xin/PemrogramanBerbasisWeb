<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtsController;

Route::get('/', function () {
    return redirect('/uts');
});

Route::get('/uts', [UtsController::class, 'index'])->name('uts.index');
Route::get('/uts/pemrograman-web', [UtsController::class, 'pemrogramanWeb'])->name('uts.pemrograman_web');
Route::get('/uts/database', [UtsController::class, 'database'])->name('uts.database');



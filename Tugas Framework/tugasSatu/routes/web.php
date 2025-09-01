<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/**
 * ROUTE DASAR + NAMED ROUTE
 */
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/', function () {
    return view('home');
})->name('home');

/**
 * ROUTE GROUP (prefix + name prefix)
 * blog.index => /blog
 * blog.show  => /blog/{slug}
 */
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [PageController::class, 'blogIndex'])->name('index');

    Route::get('/{slug}', [PageController::class, 'blogShow'])
        ->where('slug', '[A-Za-z0-9-]+') // validasi parameter
        ->name('show');
});

/**
 * PARAMETER OPSIONAL + VALIDASI
 * /hello        -> "Tamu"
 * /hello/Haikal -> "Haikal"
 */
Route::get('/hello/{name?}', [PageController::class, 'hello'])
    ->whereAlpha('name')
    ->name('hello');

/**
 * ROUTE GROUP LAIN (ADMIN)
 * Menunjukkan prefix & name prefix sekaligus parameter numerik
 */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/posts/{id}', function (int $id) {
        return view('admin.post', ['id' => $id]);
    })->whereNumber('id')->name('posts.show');
});

/**
 * REDIRECT & FALLBACK
 */
Route::redirect('/home', '/')->name('redirect.home');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

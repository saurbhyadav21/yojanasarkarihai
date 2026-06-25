<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\YojanaController;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/yojana', function () {
    return view('pages.yojana-details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {

        Route::resource('yojana', YojanaController::class);
    });


require __DIR__ . '/auth.php';

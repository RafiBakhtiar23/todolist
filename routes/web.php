<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', [TodoController::class, 'index']);
    Route::get('/create', [TodoController::class, 'create']);
    Route::post('/store', [TodoController::class, 'store']);

    Route::get('/edit/{todo}', [TodoController::class, 'edit']);
    Route::put('/update/{todo}', [TodoController::class, 'update']);

    Route::patch('/toggle/{todo}', [TodoController::class, 'toggle']);
    Route::delete('/delete/{todo}', [TodoController::class, 'destroy']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnakeReportController;

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

Route::middleware(['auth'])->group(function () {
    route::get('/snake-reports',[SnakeReportController::class,'create'])->name('snake.reports');
    route::post('/snake-reports',[SnakeReportController::class,'store'])->name('snake.store');
    // Friendly URL for reporting a snake (keeps auth requirement)
    route::get('/report-snake', [SnakeReportController::class, 'create'])->name('report-snake');
});

require __DIR__.'/auth.php';


<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnakeReportController;

// Redirect root URL to the login page to avoid navigating to the default welcome view
Route::redirect('/', '/login');

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

// Serve logo from project pics/ directory (so you don't need to copy into public/)
Route::get('/images/logo.jpg', function () {
    $path = base_path('pics/logo.jpg');
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
});
 
// Public home page (custom)
Route::get('/home', function () {
    return view('pages.home');
})->name('home');


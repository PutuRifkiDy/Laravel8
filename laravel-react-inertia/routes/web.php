<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'auth' => [
            'user' => Auth::user(),
        ],
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes untuk tampilan fe
Route::get('/about', function () {
    return Inertia::render('About', [
        'title' => 'About Us'
    ]);
});
Route::get('/blog', function () {
    return Inertia::render('Blog', [
        'title' => 'Blog'
    ]);
});
Route::get('/contact', function(){
    return Inertia::render('Contact', [
        'title'=> 'Contact'
    ]);
});
// Route::get('/blog', function() {
//     return Inertia::render('Blog', [
//         'title'=> 'Blog'
//     ]);
// })

require __DIR__.'/auth.php';

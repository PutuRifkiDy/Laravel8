<?php

use App\Http\Controllers\PostController;
use \App\Models\Post;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Category;


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
        'title' => 'About Us',
        'nama' => 'Putu Rifki Dirkayuda',
        'gambar' => '/images/logo-toko-kita.jpg'
    ]);
});
// Route::get('/blog', function () {
//     return Inertia::render('Blog', [
//         'title' => 'Blog'
//     ]);
// });


Route::get('/contact', function(){
    return Inertia::render('Contact', [
        'title'=> 'Contact' 
    ]);
});

Route::get('blog/{post:slug}', [PostController::class, 'show']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/categories/{category:slug}',  function(Category $category){
    return Inertia::render('Category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
Route::get('/categories',  function(Category $category){
    return Inertia::render('Categories', [
        'title' => "Post Categories",
        'posts' => Category::all(),
    ]);
});

require __DIR__.'/auth.php';

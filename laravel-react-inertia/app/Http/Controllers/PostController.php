<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Blog', [
            'blog'=> Post::getBlogPosts()
        ]);
    }

    public function show($slug)
    {
        $blogPost = Post::find($slug);

        return Inertia::render('BlogDetail', [
            'heading' => "Single Post",
            'blog' => $blogPost
        ]);
    }
}

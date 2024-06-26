<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Post',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => $post->slug, 'post' => $post]);
});
Route::view('/contact', 'contact', ['title' => 'Contact']);
Route::view('/about', 'about', ['title' => 'About Me']);

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count(($user->posts)) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count(($category->posts)) . ' Articles in ' . $category->name, 'posts' => $category->posts]);
});

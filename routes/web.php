<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::view('/posts', 'posts', ['title' => 'Blog Post', 'posts' => Post::all()]);
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::view('/contact', 'contact', ['title' => 'Contact']);
Route::view('/about', 'about', ['title' => 'About Me']);

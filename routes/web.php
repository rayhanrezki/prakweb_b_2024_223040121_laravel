<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rayhan Alfa', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all() ]);
});

Route::get('/post/{slug}', function ($slug) {

    $Post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $Post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

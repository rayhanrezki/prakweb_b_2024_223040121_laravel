<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rayhan Alfa', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/post/{post:slug}', function (Post $Post) {

    return view('post', ['title' => 'Single Post', 'post' => $Post]);
});

Route::get('/author/{user}', function (User $user) {

    return view('posts', ['title' => 'Articles by ' . $user->name , 'posts' => 
    $user ->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
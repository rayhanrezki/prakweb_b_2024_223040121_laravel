<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rayhan Alfa', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    //$post = post::with(['author', 'category'])->latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' =>Post::filter(request(['search', 'category', 'author']))->latest()->Paginate(5)->withQueryString( )]);
    
});

Route::get('/post/{post:slug}', function (Post $Post) {

    return view('post', ['title' => 'Single Post', 'post' => $Post]);
});

Route::get('/author/{user:username}', function (User $user) {
    //$posts = $user->posts->load('author', 'category');

    return view('posts', ['title' => count($user->posts) . " " . 'Articles by ' . $user->name,
        'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    //$posts = $category->posts->load('author', 'category');

    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' =>
        $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

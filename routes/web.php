<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rayhan Alfa', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'Ray',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe esse ipsum praesentium,
               molestias dolor ducimus, dolorum neque, aliquid iusto animi quo. Harum, similique consequuntur facere
               minus provident quasi dicta dolorrsas',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Ray',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe esse ipsum praesentium,
               molestias dolor ducimus, dolorum neque, aliquid iusto animi quo. Harum, similique consequuntur facere
               minus provident quasi dicta dolorrsas',
        ],
    ]]);
});

Route::get('/post/{slug}', function ($slug) {

    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'Ray',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe esse ipsum praesentium,
               molestias dolor ducimus, dolorum neque, aliquid iusto animi quo. Harum, similique consequuntur facere
               minus provident quasi dicta dolorrsas',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Ray',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe esse ipsum praesentium,
               molestias dolor ducimus, dolorum neque, aliquid iusto animi quo. Harum, similique consequuntur facere
               minus provident quasi dicta dolorrsas',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

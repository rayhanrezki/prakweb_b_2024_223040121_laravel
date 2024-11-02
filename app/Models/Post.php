<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return
            [
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
    }



    public static function find($slug) : array
    {

      $post = Arr::first(Static::all(), fn($post) => $post ['slug'] == $slug );

      if (!$post){
        abort(404);
      }

      return $post;
    }
}

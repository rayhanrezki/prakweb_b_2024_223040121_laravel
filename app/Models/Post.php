<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\arr;

class Post extends Model
{
  protected $fillable = ['title', 'author', 'slug', 'body'];
}

<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'post-title-1',
        'title' => 'Post Title 1',
        'author' => 'Author 1',
        'content' => 'Post Content 1'
      ],
      [
        'id' => 2,
        'slug' => 'post-title-2',
        'title' => 'Post Title 2',
        'author' => 'Author 2',
        'content' => 'Post Content 2'
      ],
      [
        'id' => 3,
        'slug' => 'post-title-3',
        'title' => 'Post Title 3',
        'author' => 'Author 3',
        'content' => 'Post Content 3'
      ]
    ];
  }

  public static function find($slug): array
  {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      return abort(404);
    }

    return $post;
  }
}

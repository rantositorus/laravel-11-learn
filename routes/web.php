<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'title' => 'Post Title 1',
                'author' => 'Author 1',
                'content' => 'Post Content 1'
            ],
            [
                'title' => 'Post Title 2',
                'author' => 'Author 2',
                'content' => 'Post Content 2'
            ],
            [
                'title' => 'Post Title 3',
                'author' => 'Author 3',
                'content' => 'Post Content 3'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

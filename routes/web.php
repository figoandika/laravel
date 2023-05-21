<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/pricing', [ProductController::class, 'index'])->name('pricing');

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});



Route::get('/pricing', function () {
    $pricing_post = [
        [
            "tittle" => "Product 1",
            "slug" => "product-1",
            "desc" => "1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptate quidem libero recusandae voluptates sapiente amet cumque iste minima? Laudantium magni beatae ipsam adipisci quo facilis expedita, a atque veniam!",
            "price" => "IDR 50.000"
        ],
        [
            "tittle" => "Product 2",
            "slug" => "product-2",
            "desc" => "2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptate quidem libero recusandae voluptates sapiente amet cumque iste minima? Laudantium magni beatae ipsam adipisci quo facilis expedita, a atque veniam!",
            "price" => "IDR 50.000"
        ],
        [
            "tittle" => "Product 3",
            "slug" => "product-3",
            "desc" => "3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptate quidem libero recusandae voluptates sapiente amet cumque iste minima? Laudantium magni beatae ipsam adipisci quo facilis expedita, a atque veniam!",
            "price" => "IDR 50.000"
        ],
        ];
    return view('pricing',[
        "pricings" => $pricing_post
    ]);
});

Route::get('/about', function () {
    return view('about');
});

/*
$new_post = [];
foreach($pricing_post as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

/*single post
Route::get('/pricing/{slug}', function ($slug) {
    return view('post', [
        "title" => "singlepost",
        "post" => $new_post
    ]);
});*/
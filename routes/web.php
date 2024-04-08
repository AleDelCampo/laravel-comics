<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $links = [
        [
            'list' => [
                'CHARACTERS',
                'COMICS',
                'MOVIES',
                'TV',
                'GAMES',
                'COLLECTIBLES',
                'VIDEOS',
                'FANS',
                'NEWS',
                'SHOP',
            ]
        ]
    ];

    return view('homepage')->with('links', $links);
})->name('home');

Route::get('/item', function () {
    return view('secondpage');
})->name('item');


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

    $comics = include(__DIR__ . '/../config/comics.php');

    return view('homepage', compact('comics', 'links'));
})->name('home');

Route::get('/item', function () {
    return view('secondpage');
})->name('item');


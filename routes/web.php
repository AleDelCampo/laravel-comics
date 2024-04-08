<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $icons = [
        [
            'icon' => Vite::asset('resources/img/buy-comics-digital-comics.png'),
            'caption' => "DIGITAL COMICS",
        ],
        [
            'icon' => Vite::asset('resources/img/buy-comics-merchandise.png'),
            'caption' => "DC MERCHANDISE",
        ],
        [
            'icon' => Vite::asset('resources/img/buy-comics-subscriptions.png'),
            'caption' => "SUBSCRIPTION",
        ],
        [
            'icon' => Vite::asset('resources/img/buy-comics-shop-locator.png'),
            'caption' => "COMIC SHOP LOCATOR",
        ],
        [
            'icon' => Vite::asset('resources/img/buy-dc-power-visa.svg'),
            'caption' => "DC POWER VISA",
        ],
    ];

    $linkss = [
        [
            'title' => "DC COMICS",
            'list' => [
                'Characters',
                'Comics',
                'Movies',
                'Tv',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'title' => "SHOP",
            'list' => [
                'Shop DC',
                'Shop DC Collectibles',
            ]
        ],
        [
            'title' => "DC",
            'list' => [
                'Terms Of Use',
                'Privacy policy',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            'title' => "SITES",
            'list' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ]
    ];

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

    $footerlogo = Vite::asset('resources/img/dc-logo-bg.png');

    $comics = include(__DIR__ . '/../config/comics.php');

    return view('homepage', compact('comics', 'links', 'icons', 'linkss'));
})->name('home');

Route::get('/item', function () {
    return view('secondpage');
})->name('item');


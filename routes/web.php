<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'items' => [
            [
                'name' => 'Home',
                'url' => '/'
            ],
            [
                'name' => 'About',
                'url' => '/about'
            ],
            [
                'name' => 'Projects',
                'url' => '/projects'
            ],
            [
                'name' => 'Contacts',
                'url' => '/contacts'
            ]
        ]
    ];

    return view('homepage', $data);
});

Route::get('/about', function() {

    $data = [
        'items' => [
            [
                'name' => 'Home',
                'url' => '/'
            ],
            [
                'name' => 'About',
                'url' => '/about'
            ],
            [
                'name' => 'Projects',
                'url' => '/projects'
            ],
            [
                'name' => 'Contacts',
                'url' => '/contacts'
            ]
        ]
    ];

    return view('about', $data);
});

Route::get('/projects', function() {

    $data = [
        'items' => [
            [
                'name' => 'Home',
                'url' => '/'
            ],
            [
                'name' => 'About',
                'url' => '/about'
            ],
            [
                'name' => 'Projects',
                'url' => '/projects'
            ],
            [
                'name' => 'Contacts',
                'url' => '/contacts'
            ]
        ]
    ];

    return view('projects', $data);
});


Route::get('/contacts', function() {

    $data = [
        'items' => [
            [
                'name' => 'Home',
                'url' => '/'
            ],
            [
                'name' => 'About',
                'url' => '/about'
            ],
            [
                'name' => 'Projects',
                'url' => '/projects'
            ],
            [
                'name' => 'Contacts',
                'url' => '/contacts'
            ]
        ]
    ];

    return view('contacts', $data);
});
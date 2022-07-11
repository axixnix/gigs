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
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
                 Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.'
            ],

            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
                 Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.'
            ],

            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
                 Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.'
            ]
        ]
    ]);
});

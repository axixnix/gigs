<?php

use App\Models\Listing;
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

//All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => Listing::allListings()
    ]);
});

//Single listing
Route::post('/{id}',function(){
    return view('listings',[
        'heading' => 'listing',
        'listings' => Listing::find(${'id'})
    ]);
});

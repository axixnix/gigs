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
        'listings' =>Listing::all()// was formerly 'listings' => Listing::allListings() and worked with the commented code in the Listing model
    ]);
});



//Single listing
// Route::get('/listings/{id}',function($id){//thought this would be a post method since we are passing a variable
//     return view('listing',[
//         'listing' => Listing::find($id)
//     ]);
// });

// Route::get('/listings/{id}',function($id){//thought this would be a post method since we are passing a variable
//     $listing =Listing::find($id);

//     if($listing){
//         return view('listing',[
//             'listing' => $listing
//         ]);

//     }else{
//         abort('404');
//     }


// });

//single listing
Route::get('/listings/{listing}',function( Listing $listing){//thought this would be a post method since we are passing a variable



        return view('listing',[
            'listing' => $listing
        ]);//this is route model binding, and unlike above, I don't have to do the if check ...the abort functionality is inbuilt




});

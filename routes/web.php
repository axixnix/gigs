<?php

use App\Http\Controllers\ListingController;
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
Route::get('/', [ListingController::class,'index']);

//Single listing
/*Route::get('/listings/{id}',function($id){//thought this would be a post method since we are passing a variable
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});*/


//Single listing...route model binding
Route::get('/listings/{listing}',[ListingController::class,'show']);

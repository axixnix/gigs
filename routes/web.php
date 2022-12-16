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

//All Listings
Route::get('/', [ListingController::class,'index']);

//Single Listing
/*Route::get('/listings/{id}',function($id){//thought this would be a post method since we are passing a variable
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});*/




//show Create Form
Route::get('/listings/create', [ListingController::class,'create']);

//store Listing Data
Route::post('/listings', [ListingController::class,'store']);

//show Edit Form...another example of route model binding
Route::get('/listings/{listing}/edit', [ListingController::class,'edit']);


//Single Listing...route model binding
Route::get('/listings/{listing}',[ListingController::class,'show']);//had to move this down as it was interfering with the create route, probably due to the wildcard

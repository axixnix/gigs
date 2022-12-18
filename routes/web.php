<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


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

/*
 common resource routes
index - Show all listings
show -Show single listing
create - Show form to create a new listing
store -Store new listing
edit - Show form to edit listing
update - Update listing
destroy -Delete listing
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

//Edit Submit to Update
Route::put('/listings/{listing}', [ListingController::class,'update']);

//Delete  Listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy']);



//Single Listing...route model binding
Route::get('/listings/{listing}',[ListingController::class,'show']);//had to move this down as it was interfering with the create route, probably due to the wildcard


//show  Register/Create Form
Route::get('/register',[UserController::class,'create']);

//Create New User
Route::post('/users',[UserController::class,'store']);

//Log User Out
Route::post('/logout',[UserController::class,'logout']);

//Show Login Form
Route::get('/login',[UserController::class,'login']);

//Log User In
Route::post('/users/authenticate',[UserController::class,'authenticate']);


<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    //all listings
    public function index(){
        return view('listings', [
            'listings' =>Listing::all()]);// was formerly 'listings' => Listing::allListings() and worked with the commented code in the Listing model


    }

    //single listing
    public function show(Listing $listing){
        return view('listing',[
            'listing' => $listing
        ]);

    }
}

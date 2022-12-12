<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    //all listings
    public function index(){
        return view('listings.index', [
            'listings' =>Listing::latest()->filter(request(['tag']))->get()]);// was formerly 'listings' => Listing::allListings() and worked with the commented code in the Listing model, listings::all() will return the listings unsorted


    }

    //single listing
    public function show(Listing $listing){
        return view('listing.show',[
            'listing' => $listing
        ]);

    }
}

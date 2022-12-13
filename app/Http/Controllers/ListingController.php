<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //

    //all listings
    public function index(){
        return view('listings.index', [
            'listings' =>Listing::latest()->filter(request(['tag','search']))->get()]);// was formerly 'listings' => Listing::allListings() and worked with the commented code in the Listing model, listings::all() will return the listings unsorted


    }

    //single listing
    public function show(Listing $listing){
        return view('listing.show',[
            'listing' => $listing
        ]);

    }

    public function create(){
        return view('listings.create');
    }

    public  function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'company'=>['required', Rule::unique('listings','company')],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>'required'
        ]);

        Listing::create($formFields);

        return redirect('/');
    }
}

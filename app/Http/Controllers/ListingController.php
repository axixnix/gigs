<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class ListingController extends Controller
{
    //

    //all listings
    public function index(){
        return view('listings.index', [
            'listings' =>Listing::latest()->filter(request(['tag','search']))->simplePaginate(3)]);// was formerly 'listings' => Listing::allListings() and worked with the commented code in the Listing model, listings::all() will return the listings unsorted


    }

    //single listing
    public function show(Listing $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);

    }

    public function create(){
        return view('listings.create');
    }

    public  function store(Request $request){
        $formFields = $request->validate([
          //  $request->file('logo')->store(),
            'title'=>'required',
            'company'=>['required', Rule::unique('listings','company')],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('logo')){
          $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        Listing::create($formFields);

        //Session::flash('success','listing created');

        return redirect('/')->with('message','new listing added successfuly');
    }

    //show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit',['listing'=>$listing]);
    }
}

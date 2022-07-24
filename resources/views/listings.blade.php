{{-- the line below connects this view to the layout view --}}
@extends('layout')
{{-- content here will be supplied to the yield directive in the layout view, in order to be displayed there --}}
@section('content')
{{--<h1>{{ $heading }}</h1> --}}
@php

            //dd($listings);
            /* if(is_a($listings,'Illuminate\Database\Eloquent\Collection')){
                dd(' a collection');
            }else{
                dd('not a collection');
            } */

@endphp

@include('partials._hero')
@include('partials._search')

<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

@unless(count($listings) == 0)

    @foreach ($listings as $listing)
        {{-- <h2>
            <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
        </h2>

        <p>
            {{ $listing['description'] }}
        </p> --}}
        @php

           // dd($listing['title']);
           /*  if(is_a($listing,'Illuminate\Database\Eloquent\Collection')){
                dd(1);
            }else{
                dd('not a collection');
            } */
        @endphp

        <x-listing-card :listing="$listing" />
        {{-- <x-listing-card listing="some string" /> when you don't want to pass in a variable, like here I am directly passing in a string --}}


    @endforeach
@else
    <p>no listing found</p>

@endunless

</div>

@endsection

{{-- note that there's even a php directive,an if directive, unless directive etc --}}

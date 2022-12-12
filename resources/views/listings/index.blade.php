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
        </p>
        @php

           // dd($listing['title']);
           /*  if(is_a($listing,'Illuminate\Database\Eloquent\Collection')){
                dd(1);
            }else{
                dd('not a collection');
            } */
        @endphp --}}
<!-- Item 1 -->
<x-listing-card :listing="$listing"/><!--notice that there is no space in :listing="$listing" if we wanted to pass in a string it would be like this <x-listing-card listing = "our string"/> -->

    @endforeach
@else
    <p>no listing found</p>

@endunless

</div>

@endsection

{{-- note that there's even a php directive,an if directive, unless directive etc --}}

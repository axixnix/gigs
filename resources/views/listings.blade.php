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
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('images/no-image.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="show.html">{{  $listing->title  }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{  $listing->company  }}</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Laravel</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">API</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Backend</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{  $listing->location  }}
            </div>
        </div>
    </div>
</div>
    @endforeach
@else
    <p>no listing found</p>

@endunless

</div>

@endsection

{{-- note that there's even a php directive,an if directive, unless directive etc --}}

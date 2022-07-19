{{-- the line below connects this view to the layout view --}}
@extends('layout')
{{-- content here will be supplied to the yield directive in the layout view, in order to be displayed there --}}
@section('content')
<h1>{{ $heading }}</h1>
@unless(count($listings) == 0)

    @foreach ($listings as $listing)
        <h2>
            <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
        </h2>

        <p>
            {{ $listing['description'] }}
        </p>
    @endforeach
@else
    <p>no listing found</p>

@endunless

@endsection

{{-- note that there's even a php directive,an if directive, unless directive etc --}}

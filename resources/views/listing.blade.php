{{-- the line below connects this view to the layout view --}}
@extends('layout')
{{-- content here will be supplied to the yield directive in the layout view, in order to be displayed there --}}
@section('content')
<h2>
        {{ $listing['title'] }}
</h2>
<p>
        {{ $listing['description'] }}
</p>
@endsection

<h1>{{ $heading }}</h1>
@foreach ($listings as $listing)
    <h2>
        {{ $listing['title'] }}
    </h2>
    <p>
        {{ $listing['description'] }}
    </p>
@endforeach
{{-- note that there's even a php directive,an if directive, unless directive etc --}}

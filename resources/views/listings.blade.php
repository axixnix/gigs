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

{{-- note that there's even a php directive,an if directive, unless directive etc --}}

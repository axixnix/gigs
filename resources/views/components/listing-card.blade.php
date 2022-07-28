{{-- @props() takes an array of props --}}
@props(['listing'])
<x-card>

    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src={{ asset('images/no-image.png') }}
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
                {{--  test above says $listing is not a collection but this syntax is still working don't know what is going on here, spent almost an hour and it just started working without me making any changes, maybe i made a typo initially --}}
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags  :tagsCSV= "$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
            </div>
        </div>
    </div>
</x-card>

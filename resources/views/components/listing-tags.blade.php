@props(['tagsCsv']){{-- the tags here will be a list of comma separated values --}}

@php
    $tags = explode(',',$tagsCsv)//here we create a tags array containing the values of our tags so we can loop through them
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
    <li
    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
>
    <a href="/?tag={{ $tag }}">{{ $tag }}</a>{{-- the href is that way so we can search by clicking the tags --}}
</li>

    @endforeach

    </ul>

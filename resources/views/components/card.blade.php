<div {{ attributes->merge(['class'=>"bg-gray-50 border border-gray-200 rounded p-6"]) }} >{{-- this div will use these classes by default and also merge any classes added to the component where it is used --}}
{{ $slot }}
</div>

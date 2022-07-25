{{-- with the line below the component will use these classes by default and add any new class we supply where we use it --}}
<div {{ $attributes->merge(['class'=>"bg-gray-50 border border-gray-200 rounded p-6"]) }} >
    {{ $slot }}
</div>

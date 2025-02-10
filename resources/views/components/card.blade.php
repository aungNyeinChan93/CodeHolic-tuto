@php

@endphp

<div class="card border shadow-sm rounded-lg my-4 relative h-[250px] ">
    <div class="card-header p-2 bg-gray-400 rounded-t-lg absolute top-0 w-full text-lg">
        {{ $title }}
    </div>
    <div class="card-body p-2 absolute top-10 w-full">
        <p class=" text-gray-600">
            @if ($slot->isEmpty())
                <p>Defalut Body</p>
            @else
                {{ $slot }}
            @endif
        </p>
    </div>
    <div class="card-footer p-2 bg-gray-400 rounded-b-lg absolute bottom-0 w-full">
        {{ $footer }}
    </div>
</div>

@php

@endphp

<div class="card px-4 py-2 bg-gray-300 rounded-lg my-4">
    <p class=" text-gray-600 text-lg">
        {{ $slot ?? 'Default content' }}
    </p>
</div>

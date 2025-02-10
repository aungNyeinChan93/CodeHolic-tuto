@php

@endphp

<label for="{{ $label }}"
    class="relative block rounded-md border my-2 border-gray-200 shadow-xs focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
    <input type="{{ $type }}" id="{{ $label }}"
        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:ring-0 focus:outline-hidden"
        placeholder="{{ $placeholder }}" />

    <span
        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
        {{ $placeholder }}
    </span>
</label>

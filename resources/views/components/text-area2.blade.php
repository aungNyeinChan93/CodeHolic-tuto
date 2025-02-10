@props(['title', 'placeholder', 'color' => 'blue'])

@php
    $status = false;

    $title = 'this is change';

    if ($status) {
        $placeholder = null;
    }
    dump($attributes);

@endphp


<div {{ $attributes->merge(['name' => 'sdfas', 'title' => "$title"])->class(["bg-$color-600"]) }}>
    <label for="OrderNotes" class="block text-sm font-medium text-{{ $color }}-700"> {{ $title }} </label>

    <textarea id="OrderNotes" class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-xs sm:text-sm" rows="4"
        placeholder="{{ $placeholder }}"></textarea>
</div>

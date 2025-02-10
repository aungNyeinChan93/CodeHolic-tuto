<a class="group inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:ring-3 focus:outline-hidden"
    href="{{ $href }}">
    <span class="block rounded-full bg-white px-3 py-1 text-sm font-medium group-hover:bg-transparent">
        @if ($slot->isEmpty())
            Click
        @else
            {{ $slot }}
        @endif
    </span>
</a>

<div @class(['p-2 rounded-lg mx-2 bg-green-400', 'bg-' . $color . '-600'])>
    @if ($message)
        {{ $message }}
    @else
        <p>Default alert</p>
    @endif
</div>

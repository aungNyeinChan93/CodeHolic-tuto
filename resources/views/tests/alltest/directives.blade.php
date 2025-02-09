@extends('layouts.test')

@section('content')
    <section>
        @php
            $lang = 'mm';
            $cars = [];
            $red = 1; // fasty && trusty

            $customers = ['mgmg', 'susu', 'koko'];
        @endphp

        @if ($appName && $name)
            <h1>if Directives</h1>
        @endif

        @unless (false)
            <h3>unless directive</h3>
        @endunless

        @isset($appName)
            {{ $name }} && {{ $appName }}
        @endisset

        @empty(null)
            <p>empty directives</p>
        @endempty

        @switch($lang)
            @case('en')
                <p>language is english!</p>
            @break

            @case('mm')
                <p>language is myanmar!</p>
            @break

            @default
                <p>This is default language</p>
        @endswitch

        @for ($i = 0; $i <= 2; $i++)
            <p> {{ $i + 1 }} This is for directives</p>
        @endfor

        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach

        @forelse ($cars as $car)
            <p>{{ $car }}</p>
        @empty
            <p>Empty Car (forelse directives!)</p>
        @endforelse

        @foreach ([1, 2, 3, 4] as $num)
            {{-- @dump($loop) --}}
            @continue($num == 3)
            <p>{{ $num }}</p>
        @endforeach

        <p>Break directive</p>
        @foreach ([1, 2, 3, 4] as $num)
            @break($num == 3)
            <p>{{ $num }}</p>
        @endforeach


        <div @class([
            'text-red-600 bg-gray-300 rounded-lg p-2 my-3',
            'text-2xl' => $red,
            'font-bold' => true,
        ])>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores optio quae sapiente.</p>
        </div>

        <div @style(['color:red ; background-color: blue' => true])>Style Directives</div>

        @each('tests.alltest.customer', $customers, 'customer')

        @foreach ($customers as $customer)
            @include('tests.alltest.customer', ['customer' => $customer])
        @endforeach

    </section>
@endsection

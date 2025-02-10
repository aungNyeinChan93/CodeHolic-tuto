@extends('layouts.test')


@section('title', 'Home Page')

@section('content')

    @php
        $array = [1, 2, 3, 4];

    @endphp
    <section>

        @if (session('success'))
            <div class="alert p-2 rounded-lg bg-green-200 mt-2 relative mx-4">
                {{ session('success') }}
                <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-red-600"
                    onclick="this.parentElement.style.display='none';"> X </button>
            </div>
        @endif

        <h3 class=" text-2xl text-red-600 ">{{ auth()->user()->name ?? null }}</h3>

        <div>
            @dump(app()->getLocale())
        </div>

        <x-card>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dolore eaque voluptas optio in cupiditate nisi
            necessitatibus aliquam delectus rerum.
        </x-card>

        <x-card />

        <div class="bg-red-300 grid grid-cols-4 gap-5 px-3 py-2 rounded">
            @foreach ([1, 2, 3, 4] as $item)
                <x-container>
                    (<span>{{ $item }}</span>)
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eaque suscipit dolorum cum voluptates
                    dicta
                    dolor
                    corporis quasi omnis animi, maiores iusto recusandae amet possimus consequuntur eius libero incidunt
                    quam!
                    Velit
                    fugiat tenetur voluptates cumque recusandae. Facilis nostrum aut distinctio?
                </x-container>
            @endforeach
        </div>

        <x-admin.card />
        <div class="flex justify-between items-center">
            @each('components.admin.card', $array, $item)
        </div>

    </section>
@endsection

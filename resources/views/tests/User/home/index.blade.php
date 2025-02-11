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

        <x-card>
            <x-slot name="title">
                This is header
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dolore eaque voluptas optio in cupiditate nisi
            necessitatibus aliquam delectus rerum.
            <x-slot:footer>
                This is footer
            </x-slot:footer>
        </x-card>

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

        <x-admin.button>Click</x-admin.button>
        <x-admin.button>Delete</x-admin.button>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-x-5 space-y-4 p-3">
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $item)
                <x-card>
                    <x-slot:title>lorem title</x-slot:title>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente ipsa ullam aspernatur.
                    <x-slot:footer>This is lorem footer</x-slot:footer>
                </x-card>
            @endforeach
        </div>

        <div class="flex justify-between flex-col  items-start space-y-2 m-2 flex-wrap">
            @foreach ([1, 2, 3, 4] as $item)
                <x-question>
                    <x-slot:question>This is Question</x-slot:question>
                    <x-slot:answer>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci hic sed labore
                        neque
                        distinctio laboriosam fuga alias minus. A, vitae!
                    </x-slot:answer>
                </x-question>
            @endforeach
        </div>


        <div>
            <x-example name="Example Component" :users="$users"></x-example>
        </div>

        <div class="grid grid-cols-4 ">
            <div class="col-span-2 col-start-2">
                <div class="p-4 border border-blue-400 rounded my-4">
                    <p>Form</p>
                    <x-input-field class="col-span-2" label='name' placeholder="Enter Name"
                        type='text'></x-input-field>

                    <x-input-field class="col-span-2" label='name' placeholder="Enter email"
                        type='text'></x-input-field>

                    <x-input-field class="col-span-2" label='name' placeholder="Enter password"
                        type='text'></x-input-field>

                    <x-button href="{{ route('register') }}">Register</x-button>

                </div>
            </div>
        </div>


        <div>
            <x-card>
                <x-slot:title>title</x-slot:title>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime est nobis.
                <x-slot:footer>This is footer</x-slot:footer>
            </x-card>
        </div>

        <div>
            <x-text-area2 id='something' title="text area 2" placeholder="This is Text Area" color='green'></x-text-area2>
            <x-text-area2 class="border my-6" id="dasfs" title="text area 2" placeholder="This is Text Area"
                color='red'></x-text-area2>
        </div>




    </section>
@endsection

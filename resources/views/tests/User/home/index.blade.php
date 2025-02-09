@extends('layouts.test')


@section('title', 'Home Page')

@section('content')
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
    </section>
@endsection

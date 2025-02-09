@extends('layouts.test')

@section('content')
    @php
        $cards = [1, 2, 3, 4];
    @endphp

    <section>

        <div class="grid grid-cols-4 gap-4 mt-5">
            @each('tests.alltest.card', $users, 'user')
        </div>

    </section>
@endsection

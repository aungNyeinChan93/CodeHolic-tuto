@extends('layouts.test')

@section('content')
    @php
        $array = [1, 2, 3];
    @endphp

    <section>
        <div class="mt-3">
            @include('tests.shared.alert', ['color' => 'red', 'message' => 'this is red alert message'])
        </div>
        <div class="mt-3">
            @include('tests.shared.alert', ['color' => 'gray', 'message' => 'this is gray alert message'])
        </div>
        <div class="mt-3">
            @include('tests.shared.alert', ['color' => '', 'message' => ''])
        </div>

    </section>
@endsection

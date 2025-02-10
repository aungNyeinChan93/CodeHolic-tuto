@extends('layouts.test')

@section('content')
    <section>

        {{-- userLists --}}
        <div class="p-4 border my-4 rounded shadow-sm">
            <x-user-table title="User Lists"></x-user-table>
        </div>

    </section>
@endsection

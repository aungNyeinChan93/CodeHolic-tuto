@extends('layouts.test')

@section('content')
    <div class="w-full h-[600px] p-2  bg-gray-200 relative">
        <h1 class="text-2xl text-center underline text-red-400">User Lists {{ $appName }}</h1>
        <p class="text-xl text-bold ">Total User {{ count($users) }}</p>
        @if (count($users) !== 0)
            <ul>
                @foreach ($users as $user)
                    <li>
                        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                    </li>
                @endforeach
            </ul>
        @endif

        <div class=" absolute  bottom-0 right-4 mb-5">
            <div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.test')

@section('content')

    <div class="my-4 bg-gray-100 p-2 rounded">
        <h1 class="text-2xl text-center underline text-red-400">User Lists {{ $appName }}</h1>
        <p class="text-xl text-bold ">Total User {{ count($users) }}</p>
        @if (count($users) !== 0)
            <div class="grid grid-cols-4 gap-x-4 gap-y-2">
                @foreach ($users as $user)
                    <x-card>
                        <x-slot:title>{{ $user->name }}</x-slot:title>
                        {{ $user->email }}
                        <x-slot:footer>{{ $user->created_at->format('d-m-Y h-m-s') }}</x-slot:footer>
                    </x-card>
                @endforeach
            </div>
        @endif
        <div class="">
            <div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection

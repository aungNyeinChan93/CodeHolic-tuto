@extends('layouts.guest')

@section('title', 'Register')
@section('content')
    <section class="container mx-auto">
        <div class="flex justify-center items-center min-h-screen">
            <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">
                <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
                <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @error('name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="mb-2 text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @error('email')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="password" class="mb-2 text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" value="{{ old('password') }}"
                            class="px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @error('password')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="password_confirmation" class="mb-2 text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                            class="px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @error('password_confirmation')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

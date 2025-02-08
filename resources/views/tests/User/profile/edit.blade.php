@extends('layouts.test')

@section('content')
    <section class="container mx-auto p-3">
        <div class="flex justify-center items-center min-h-screen bg-gray-100 ">
            <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6 text-center">Update Profile</h2>
                <form action="{{ route('users.update', $user->id) }}" method="post" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name"
                            value="{{ old('name', $user->name) }}" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"
                            value="{{ old('email', $user->email) }}" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <input type="submit" value="Update"
                            class="w-full p-2 bg-blue-500 text-gray-100 rounded hover:bg-blue-600 cursor-pointer">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

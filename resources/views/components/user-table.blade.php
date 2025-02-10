@php

@endphp


<div class="overflow-x-auto">
    <h4 class="text-2xl text-bold text-center p-2 mb-3 underline">{{ $title }}</h4>
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="ltr:text-left rtl:text-right">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Create Date</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">

            @foreach ($users() as $user)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $user->name }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->email }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $user->created_at->format('d-m-Y h-m-s') }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <x-button href="{{ route('home.index') }}">Back</x-button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="mt-3 p-4">
        {{ $users->links() }}
    </div>
</div>

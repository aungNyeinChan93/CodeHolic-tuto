<div class=" p-5 bg-gray-200 ">
    {{ $test() }}
    <h1 class="text-4xl text-center">{{ $name }}</h1>

    @foreach ($users as $user)
        <li>{{ $user['name'] }}</li>
    @endforeach
    <p>{{ $any }}</p>
</div>

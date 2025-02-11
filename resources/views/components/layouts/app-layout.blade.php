@props(['footer' => '', 'title' => 'My App'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <nav>
        this is nav
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer>
        {{ $footer }}
    </footer>
</body>

</html>

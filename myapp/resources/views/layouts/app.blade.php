<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SkyPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('partials.header')

    <main class="main">
        @yield('content')
    </main>
</body>
</html>

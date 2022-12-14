<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>

<div class="container">
    <div class="text-center mt-5">
        <a href="https://shouts.dev/" target="_blank">
            <img src="{{ asset('logo.png') }}" alt="logo"><br>
        </a>
        <span class="text-secondary">Laravel Skrill Integration with LaraSkrill</span>
    </div>

    <div class="mt-3">
        @yield('content')
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="link todo-link">Todos</a>
        <a href="/create" class="link button">Create Todo</a>
    </nav>
    <div class="container">
        @if (session()->has('success'))
            <div class="success-message">
                {{ session()->get('success')}}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
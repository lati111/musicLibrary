<html lang="en">
<head>
    <meta charset="UTF-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
</head>
<body>
    <h1>@yield('header')</h1>

    <nav>
        <ul>
            <li><a href="{{route('home')}}">home</a></li>
            <li><a href="{{route('library')}}">library</a></li>
            <li><a href="{{route('songs')}}">songs</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

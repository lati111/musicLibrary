<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Songs</title>
    </head>
    <body>
        <h1>Muziek speler</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('library')}}">library</a></li>
                <li><a href="{{route('songs')}}">songs</a></li>
            </ul>
        </nav>
    </body>
</html>

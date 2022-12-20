@extends('layout.master')

@section('title', 'Edit Song')

@section('header', 'Pas muziek aan')

@section('content')
    @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('song.update', $id) }}" method="POST">
            @csrf
            <label for="name">Naam:</label>
            <br>
            <input type="text" name="name" value="{{$song["song_name"]}}" required minlength="3" maxlength="32">
            <br><br>
            <label for="autheur">Autheur:</label>
            <br>
            <input type="text" name="autheur" value="{{$song["author"]}}" required minlength="6" maxlength="32">
            <br><br>
            <label for="releaseYear">Release datum:</label>
            <br>
            <input type="int" name="releaseYear" value="{{$song["release_year"]}}" minlength="4" maxlength="4" required>
            <br><br>
            <input type="submit">
        </form>
@endsection

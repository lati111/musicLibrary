@extends('layout.master')

@section('title', 'Library')

@section('header', 'Muziek Bibliotheek')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @foreach ($songs as $song)
        <div>
            <div>
                <b>Titel: </b>
                <span>{{$song["song_name"]}}</span>
            </div>
            <div>
                <b>Autheur: </b>
                <span>{{$song["author"]}}</span>
            </div>
            <div>
                <b>Release jaar: </b>
                <span>{{$song["release_year"]}}</span>
            </div>
            <div>
                <a href="{{ route('song.edit', ["id" => $song["id"]]) }}">Update</a>
                <span> </span>
                <a href="{{ route('song.delete', ["id" => $song["id"]]) }}">Verwijder</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection

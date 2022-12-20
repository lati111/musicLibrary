@extends('layout.master')

@section('title', 'Library')

@section('header', 'Muziek Bibliotheek')

@section('content')
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
        </div>
    @endforeach
@endsection

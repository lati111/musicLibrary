@extends('layout.master')

@section('title', 'Songs')

@section('header', 'Muziek Speler')

@section('content')
    <a href="{{ route('song.add') }}"><button>Voeg muziek toe</button></a>
@endsection

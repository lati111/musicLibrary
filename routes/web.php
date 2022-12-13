<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/library', function () {
    return view('library');
})->name("library");

Route::get('/songs', function () {
    return view('songs');
})->name("songs");

Route::get('/newSong', function () {
    return view('newSong');
})->name("newSong");
Route::post('/newSong', [SongController::class, 'store'])->name("song.add");

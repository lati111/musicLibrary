<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

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
Route::post('/newSong', [SongsController::class, 'store'])->name("song.add");

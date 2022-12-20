<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/library', [LibraryController::class, 'show'])->name("library");

Route::get('/songs', [SongController::class, 'show'])->name("songs");

Route::get('/songs/new', [SongController::class, 'showSongForm'])->name("song.new");
Route::post('/songs/new', [SongController::class, 'store'])->name("song.add");
Route::get('/songs/delete/{id}', [SongController::class, 'delete'])->name("song.delete");
Route::get('/songs/delete', function () {
    return redirect('/songs');
});

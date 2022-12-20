<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/library', [LibraryController::class, 'show'])->name("library");

Route::get('/songs', [SongController::class, 'show'])->name("songs");

Route::get('/songs/new', [SongController::class, 'showNewForm'])->name("song.new");
Route::post('/songs/new', [SongController::class, 'store'])->name("song.add");
Route::get('/songs/update/{id}', [SongController::class, 'showEditForm'])->name("song.edit");
Route::post('/songs/update/{id}', [SongController::class, 'update'])->name("song.update");
Route::get('/songs/delete/{id}', [SongController::class, 'delete'])->name("song.delete");
Route::redirect("/songs/update", "/songs");
Route::redirect("/songs/delete", "/songs");

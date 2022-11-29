<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/library', function () {
    return view('library');
})->name("library");

Route::get('/songs', function () {
    return view('songs');
})->name("songs");

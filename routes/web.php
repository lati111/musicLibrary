<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/songs', function () {
    return view('songs');
});

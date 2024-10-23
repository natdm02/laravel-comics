<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', ['comics' => $comics]);
});


Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
    if (isset($comics[$index])) {
        return view('comics.show', ['comic' => $comics[$index]]);
    }
    return redirect('/comics');
});

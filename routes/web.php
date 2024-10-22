<?php

use Illuminate\Support\Facades\Route;

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', ['comics' => $comics]);
});

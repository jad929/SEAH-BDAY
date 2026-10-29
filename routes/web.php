<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('birthday-entry', [
        'birthday' => config('birthday'),
    ]);
});

Route::get('/dashboard', function () {
    return view('birthday', [
        'birthday' => config('birthday'),
    ]);
});

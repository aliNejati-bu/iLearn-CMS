<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('blade/{blade}', function (string $blade) {
    return view($blade);
});
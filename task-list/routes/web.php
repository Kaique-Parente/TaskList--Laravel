<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello';
})->name('hello');

Route::get('/halle', function () {
    return redirect()->route('hello');
});

Route::get('/saysHello/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

Route::fallback(function () {
    return "Não existe nada aqui!";
});

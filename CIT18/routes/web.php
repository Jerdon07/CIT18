<?php

use App\Http\Controllers\index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [index::class, ])

Route::get('/greeting', function () {
    return view('greet');
});

Route::get('/hello', [GreetControler::class, 'hello']);
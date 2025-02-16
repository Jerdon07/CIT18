<?php

use App\Http\Controllers\index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetControler;
use App\Http\Controllers\tasksController;
use App\Http\Controllers\ItemController;

// Default Laravel Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// ACTIVITY: SIMPLE ROUTING TO VIEWS
// Simply Returns a message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});
// Calling GreetControler's hello method
Route::get('/hello', [GreetControler::class, 'hello']);



Route::resource('tasks', tasksController::class);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}', [ItemController::class, 'show']);

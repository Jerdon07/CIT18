<?php

use App\Http\Controllers\index; // DEFAULT LARAVEL WELCOME PAGE
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetControler; // SIMPLE ROUTING TO VIEWS
use App\Http\Controllers\tasksController; // MIGRATION AND MODEL
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

// ACTIVITY: MIGRATION AND MODEL
// Route to tasksController
Route::resource('tasks', TasksController::class);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}', [ItemController::class, 'show']);

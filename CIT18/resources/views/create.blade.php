@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <label for="completed">Completed</label>
        <input type="checkbox" name="completed" id="completed">
        <button type="submit">Create</button>
    </form>
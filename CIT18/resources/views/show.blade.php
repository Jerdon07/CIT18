@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>{{ $task->completed ? 'Completed' : 'Not Completed' }}</p>
    <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Task</button>
    </form>
@endsection
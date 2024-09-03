@extends('layouts.layout')

@section('title', 'Task Details')

@section('content')
    <h1 class="my-4">{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p><strong>Completed:</strong> {{ $task->completed ? 'Yes' : 'No' }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit Task</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

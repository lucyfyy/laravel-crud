@extends('layouts.layout')

@section('title', 'To-Do List')

@section('content')
    <h1 class="my-4">To-Do List</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add New Task</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                <div>
                    @if (!$task->completed)
                        <form action="{{ route('tasks.updateCompleted', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm btn-success">Mark as Completed</button>
                        </form>
                    @else
                        <span class="badge bg-success">Completed</span>
                    @endif
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

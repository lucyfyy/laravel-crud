@extends('layouts.layout')

@section('title', 'Edit Task')

@section('content')
    <h1 class="my-4">Edit Task</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection

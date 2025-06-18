@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div>
        <p>{{ $task->id }}</p>
        <p>{{ $task->description }}</p>

        @if ($task->long_description)
            <p>{{ $task->long_description }}</p>
        @endif

        <p>{{ $task->completed }}</p>
        <p>{{ $task->created_at }}</p>

        <a href="{{route('tasks.edit', ['task'=>$task])}}">Edit</a>

        <form method="POST" action="{{route('task.destroy', ['task'=>$task])}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection

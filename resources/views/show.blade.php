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
        <p>{{ $task->updated_at }}</p>
        <p>{{ $task->completed ? 'Completed' : 'Not completed'}}</p>

        <a href="{{route('tasks.edit', ['task'=>$task])}}">Edit</a>

        <div>
            <form method="POST" action="{{route('task.toggle-complete', ['task'=>$task])}}">
                @csrf
                @method('PUT')
                <button>
                    Mark as {{$task->completed ? 'not-completed' : 'completed'}}
                </button>
            </form>
        </div>

        <form method="POST" action="{{route('task.destroy', ['task'=>$task])}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection

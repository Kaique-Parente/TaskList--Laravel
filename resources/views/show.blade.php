@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-4">
        <a href={{ route('tasks.index') }} class="font-medium text-gray-700 underline decoration-pink-500">← Go back to the
            task list!</a>
    </div>

    <p class="mb-4 text-slate700">{{ $task->description }}</p>

    @if ($task->long_description)
        <p class="mb-4 text-slate700">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500">{{ $task->created_at->diffForHumans() }} •
        {{ $task->updated_at->diffForHumans() }}</p>

    <p>{{ $task->completed ? 'Completed' : 'Not completed' }}</p>

    <a href="{{ route('tasks.edit', ['task' => $task]) }}">Edit</a>

    <div>
        <form method="POST" action="{{ route('task.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button>
                Mark as {{ $task->completed ? 'not-completed' : 'completed' }}
            </button>
        </form>
    </div>

    <form method="POST" action="{{ route('task.destroy', ['task' => $task]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection

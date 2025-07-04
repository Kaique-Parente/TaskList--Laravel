@extends('layouts.app')

@section('title', 'This is my home page')

@section('content')
    <nav class="mb-4">
        <a href={{route('tasks.create')}}
        class="link">Add Task!</a>
    </nav>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task]) }}"
                @class(['line-through'=>$task->completed])>{{ $task->title }}</a>
        </div>
    @empty
        <p>Não existe nada aqui ainda</p>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection

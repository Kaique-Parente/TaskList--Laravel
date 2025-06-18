@extends('layouts.app')

@section('title', 'This is my home page')

@section('content')
@forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a>
    </div>
@empty
    <p>Não existe nada aqui ainda</p>
@endforelse
@endsection

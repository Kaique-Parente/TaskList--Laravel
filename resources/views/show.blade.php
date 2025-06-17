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
    </div>
@endsection

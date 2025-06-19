@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task!' : 'Add new Task!')

@section('content')
    <form method="POST" action="{{ isset($task) ? route('task.update', ['task' => $task]) : route('task.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" @class(['outline-red-500' => $errors->has('title')])
                value="{{ isset($task) ? $task->title : old('title') }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea @class(['outline-red-500' => $errors->has('description')]) name="description" id="description" rows="5">
                {{ isset($task) ? $task->description : old('description') }}
            </textarea>

            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea @class(['outline-red-500' => $errors->has('long_description')]) name="long_description" id="long_description" rows="10">
                {{ isset($task) ? $task->long_description : old('long_description') }}
            </textarea>
            @error('long_description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2.5">

            <a class="btn" href={{ route('tasks.index') }}>Cancel</a>

            <button class="btn w-3/5 cursor-pointer" type="submit">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>

        </div>
    </form>
@endsection

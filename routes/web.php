<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at
    ) {
    }
}

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => \App\Models\Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')
    ->name('tasks.create');
;

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
        'task' => \App\Models\Task::findOrFail( $id )
    ]);
})->name('tasks.show');

Route::fallback(function () {
    return "Não existe nada aqui!";
});

Route::post('/tasks', function (Request $request) {
    dd($request->all());
})->name('task.store');

// Route::get('/hello', function () {
//     return 'Hello';
// })->name('hello');

// Route::get('/halle', function () {
//     return redirect()->route('hello');
// });

// Route::get('/saysHello/{name}', function ($name) {
//     return 'Hello ' . $name . '!';
// });


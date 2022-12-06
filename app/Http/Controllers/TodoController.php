<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public $value = false;
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', ['todos' => $todos]);
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('todos.index');
    }

    public function update(Todo $todo)
    {
        $todo->update(['completed' => true]);
        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}

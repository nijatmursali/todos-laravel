@extends('layout')

@section('content')
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl"
        style="height: 90vh; display: flex; flex-direction: column; align-items:center;justify-content:center;">
        <h1 style="font-size: 70px; font-family: 'Courier New', Courier, monospace">Todo App</h1>

        <a href="{{ route('todos.index') }}" style="font-size: 30px">Go to todos</a>
    </div>
@endsection

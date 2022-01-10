@extends('layouts.app')
@section('title')
    Todos
@endsection
@section('content')
    <ul class="todos-list">
        @foreach ($todos as $todo)
            <li class="todo-item"><a href="/details/{{$todo->id}}">{{$todo->name}}</a></li>    
        @endforeach
    </ul>
@endsection
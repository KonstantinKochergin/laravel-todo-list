@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')
    <form action="/update/{{$todos->id}}" method="post" class="create-todo-form">
        @csrf
        <div class="form-group">
            <label for="name">Todo Name:</label>
            <input type="text" class="form-control text-input" name="name" value="{{$todos->name}}">
        </div>
        <div class="form-group">
            <label for="description">Todo Description:</label>
            <textarea type="text" class="form-control text-input" name="description" rows="3">{{$todos->description}}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="button" value="Update">
        </div>
    </form>
@endsection
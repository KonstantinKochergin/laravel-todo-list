@extends('layouts.app')
@section('title')
    Create Todo
@endsection
@section('content')
    <form action="store-data" method="post" class="create-todo-form">
        @csrf
        <div class="form-group">
            <label for="name">Todo Name:</label>
            <input type="text" class="form-control text-input" name="name">
        </div>
        <div class="form-group">
            <label for="description">Todo Description:</label>
            <textarea type="text" class="form-control text-input" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="button" value="Create">
        </div>
    </form>
@endsection
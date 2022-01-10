@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')
    <div class="details-container">
        <div class="todo-details-card">
            <div class="todo-details-card-header">
                Todo details
            </div>
            <div class="todo-details-card-body">
                <div class="todo-details-card-title">{{$todos->name}}</div>
                <div class="todo-details-card-description">{{$todos->description}}</div>
                <div class="todo-details-buttons">
                    <a href="/edit/{{$todos->id}}" class="button edit-button">Edit</a>
                    <a href="/delete/{{$todos->id}}" class="button button--danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create new Project</h1>
    <form action="{{ route('projects.store') }}" method = "POST">
        @csrf
        <div class="form-group">
            <label for="title">Name of Project</label>
            <input type="text" name = "title" class = "form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class = "form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <button type = "submit" class = "btn btn-primary">Create</button>
    </form>
@endsection
</div>
@extends('layout')

@section('title', 'Add Post')

@section('content')
<div class="container">
    <h2>Add a New Student</h2>

    <!-- Display Success Message if Available -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Form to add a student -->
    <form action="{{ route('store-posts') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Content</label>
            <input type="text" name="content" id="content" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</div>
@endsection
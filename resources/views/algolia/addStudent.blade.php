@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="container h-100">
    <h2>Add a New Student</h2>

    <!-- Display Success Message if Available -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to add a student -->
    <form action="{{ route('store-student') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
@endsection

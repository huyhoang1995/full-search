@extends('layout')
@section('content')

<!-- Filter Form -->
<form method="GET" action="{{ route('list-scout') }}" class="mb-2">
    <div class="form-row">
        <div class="col">
            <input type="text" name="search" class="form-control" placeholder="Filter by Full Text" value="{{ request('search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Filter Name</button>

    </div>
    <div class="form-row">
        <div class="col" style="margin-top: 20px;">
        </div>
    </div>
</form>
<a class="btn btn-primary float-right mb-2" href="{{ route('add-student') }}">Add Student</a>

<!-- Students Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th> <!-- New column for Delete button -->
        </tr>
    </thead>
    <tbody>
        @forelse($students as $student)
        <tr>
            <td>{{ ($students->currentPage() - 1) * $students->perPage() + $loop->iteration }}</td> <!-- STT Column -->
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>
                <form action="{{ route('delete-student', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-circle">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">No students found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@if(is_array($students) ? count($students) > 0 : $students->count() > 0)
<div class="d-flex justify-content-between align-items-center">
    {{-- Previous Button --}}
    @if ($students->onFirstPage())
    <button class="btn btn-secondary" disabled>Previous</button>
    @else
    <a href="{{ $students->appends(request()->query())->previousPageUrl() }}" class="btn btn-primary">Previous</a>
    @endif

    {{-- Page Number Links --}}
    <div>
        {{ $students->appends(request()->query())->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>

    {{-- Next Button --}}
    @if ($students->hasMorePages())
    <a href="{{ $students->appends(request()->query())->nextPageUrl() }}" class="btn btn-primary">Next</a>
    @else
    <button class="btn btn-secondary" disabled>Next</button>
    @endif
</div>
@endif

@endsection
@extends('layout')
@section('content')

<!-- Filter Form -->
<form method="GET" action="{{ route('list') }}" class="mb-4">
    <div class="form-row">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Filter by Name" value="{{ request('name') }}">
        </div>

        <div class="col">
            <input type="text" name="full_text" class="form-control" placeholder="Filter by Full Text" value="{{ request('full_text') }}">
        </div>

    </div>
    <div class="form-row">
        <div class="col" style="margin-top: 20px;">
            <button type="submit" name="filter_type" value="TYPE_SEARCH_NAME" class="btn btn-primary">Filter Name</button>
            <button type="submit" name="filter_type" value="TYPE_SEARCH_NAME_FULL" class="btn btn-primary">Filter Name Full</button>
            <button type="submit" name="filter_type" value="TYPE_SEARCH_NAME_EMAIL_FULL" class="btn btn-primary">Filter Name Email Full Text</button>
            <button type="submit" name="filter_type" value="RESET" class="btn btn-primary">Reset</button>
        </div>
    </div>
</form>

<!-- Students Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @forelse($students as $student)
        <tr>
            <td>{{ ($students->currentPage() - 1) * $students->perPage() + $loop->iteration }}</td> <!-- STT Column -->
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
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
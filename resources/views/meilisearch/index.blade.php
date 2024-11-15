@extends('layout')
@section('content')

<!-- Filter Form -->

<form method="GET" action="{{ route('list-posts') }}" class="mb-4">
    <div class="form-row">
        <div class="col">
            <input type="text" name="query" class="form-control" placeholder="Filter by Full Text" value="{{ request('full_text') }}">
        </div>
        <button type="submit" name="filter_type" value="TYPE_SEARCH_NAME" class="btn btn-primary">Filter
        </button>

    </div>

</form>

<a class="btn btn-primary mb-2 float-right" href="{{ route('add-posts') }}">Add Post</a>

<!-- posts Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Content </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}</td> <!-- STT Column -->
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <form action="{{ route('delete-posts', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
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
            <td colspan="3" class="text-center">No food found.</td>
        </tr>
        @endforelse
    </tbody>
</table>


@if(is_array($posts) ? count($posts) > 0 : $posts->count() > 0)
<div class="d-flex justify-content-between align-items-center">
    {{-- Previous Button --}}
    @if ($posts->onFirstPage())
    <button class="btn btn-secondary" disabled>Previous</button>
    @else
    <a href="{{ $posts->appends(request()->query())->previousPageUrl() }}" class="btn btn-primary">Previous</a>
    @endif

    {{-- Page Number Links --}}
    <div>
        {{ $posts->appends(request()->query())->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>

    {{-- Next Button --}}
    @if ($posts->hasMorePages())
    <a href="{{ $posts->appends(request()->query())->nextPageUrl() }}" class="btn btn-primary">Next</a>
    @else
    <button class="btn btn-secondary" disabled>Next</button>
    @endif
</div>
@endif
@endsection
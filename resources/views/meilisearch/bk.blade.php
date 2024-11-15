{{-- resources/views/posts/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Post List</h1>

    {{-- Display flash message for delete confirmation --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->content, 50) }}</td>
                <td>
                    {{-- Delete Button --}}
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination Links --}}
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
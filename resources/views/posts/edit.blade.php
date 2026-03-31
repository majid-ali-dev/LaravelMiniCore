@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-warning">Edit Post</div>
    <div class="card-body">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}">
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"
                    rows="4">{{ old('description', $post->description) }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button class="btn btn-warning">Update Post</button>
        </form>
    </div>
</div>
@endsection
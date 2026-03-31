@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-success text-white">Create Post</div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button class="btn btn-success">Save Post</button>
        </form>
    </div>
</div>
@endsection
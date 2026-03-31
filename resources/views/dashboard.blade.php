@extends('layouts.app')

@section('content')
<h2 class="mb-4">Dashboard</h2>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>Total Users</h5>
                <h2>{{ $totalUsers }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>Total Posts</h5>
                <h2>{{ $totalPosts }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>My Posts</h5>
                <h2>{{ $myPosts }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
    <a href="{{ route('posts.index') }}" class="btn btn-success">Manage Posts</a>
</div>
@endsection
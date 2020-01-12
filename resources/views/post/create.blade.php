@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3> Create Post </h3>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" rows="4" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ url('post') }}" class="btn btn-secondary">Back</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
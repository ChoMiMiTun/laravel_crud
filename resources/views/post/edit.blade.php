@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3> Edit Post </h3>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label>Cotent</label>
                            <textarea class="form-control" rows="4" name="content" value="{{ $post->content }}">{{ $post->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('post') }}" class="btn btn-secondary">Back</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
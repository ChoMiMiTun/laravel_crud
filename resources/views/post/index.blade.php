@extends('layouts.app')

@section('title', 'All Post')

@section('content')

    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{ url('post/create') }}" class="btn btn-primary">Create Post</a>
            </div>
        </div>
            @include('alert')
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3> {{ $post->title }} </h3>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">{{ substr("$post->content", 0, 600) }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-9">
                                Post on / {{ $post->created_at->diffForHumans() }}
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary float-left mr-2">View</a>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success float-left mr-2">Edit</a>
                                <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center m-3">
            {{ $posts->links() }}
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('title') {{ $post->title }}

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <p class="text-justify">{{ $post->content }}</p>
            </div>
            <div class="card-footer">
                <p class="text-right"><a href="{{ url('post') }}" class="btn btn-secondary">Back</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
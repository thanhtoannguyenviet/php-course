@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $post->title }}</h3>
        </div>
        <div class="card-body">
            <p>{{ $post->content }}</p>
            <p>{{ $post->email }}</p>
        </div>
    </div>
@endsection
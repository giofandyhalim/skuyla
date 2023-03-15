@extends('layouts.main')

@section('container')
        <h1 class="mb-5">{{ $post->title }}</h1>
        
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
       {!! $post->body !!}

    <a href="/posts" class="d-block mt-2">Back To Post</a>
@endsection
@extends('layouts.app')

@section('title')
    Book List
@endsection

@section('content')
    <div style="background: #388bf2; font-size: 24px; color: white">
        Simple libary app
    </div>

    <div style="margin-top: 20px; margin-bottom: 20px">
        <a href="/books"> Book list </a>

        <p> Here is the book detail</p>
        <p> Title <b> {{ $book->title }}</b></p>
        <p> Publication <b> {{ $book->publication }}</b></p>
        <p> Author <b> {{ $book->author }}</b></p>
        <p> Year <b> {{ $book->year }}</b></p>
    </div>
@endsection
@extends('layouts.master')

@section('title', $post->title)

@section('content')

     <h1>{{ $post->title }}</h1>
     <p>{{ $post->content }}</p>

     <a href="{{ route('posts.edit', $post) }}">Edit</a>

     <a href="{{ route('posts.index') }}">Back</a>

@endsection
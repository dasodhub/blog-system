@extends('layouts.master')

@section('title', $post->title)

@section('content')

     <h1>{{ $post->title }}</h1>
     <p>{{ $post->content }}</p>

     <a href="{{ rpute('posts.index') }}">Back</a>

@endsection
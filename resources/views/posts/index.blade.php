@extends('layouts.master')

@section('title', 'All Posts')

@section('content')

      <h1>All Posts</h1>
      <a href="{{ route('posts.create') }}">Create New Post</a>

      <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </li>
        
        @endforeach
      </ul>

@endsection
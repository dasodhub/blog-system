@extends('layouts.master')

@section('title', $post->title)

@section('content')

     <h1>{{ $post->title }}</h1>
     <p>{{ $post->content }}</p>

     <a href="{{ route('posts.edit', $post) }}">Edit</a>

     <form action="{{ route('posts.destroy', $post) }}" method="POST" style="margin-top: 10px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure')">Delete</button>
     </form>

     <a href="{{ route('posts.index') }}">Back</a>

@endsection
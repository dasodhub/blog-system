@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')

    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required>{{ $post->content }}</textarea>
    </div>
    <button type="submit">Update</button>

 </form>

@endsection
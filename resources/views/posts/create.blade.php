@extends('layouts.master')

@section('title', 'Create Post')

@section('content')

 <h1>Create Post</h1>
  
 <form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <button type="submit">Save</button>

 </form>

@endsection
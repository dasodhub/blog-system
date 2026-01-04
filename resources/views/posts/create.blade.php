@extends('layouts.master')

@section('title', 'Create Post')

@section('content')

 <h1>Create Post</h1>

 @if($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 @endif
  
 <form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content"></textarea>
    </div>
    <button type="submit">Save</button>

 </form>

@endsection
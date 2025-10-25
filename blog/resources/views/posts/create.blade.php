@extends('layouts.base')

@section('content')
<h3>Create new post</h3>
<p><strong><i><a href="{{ route('posts.index') }}">See all posts</a></i></strong></p>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" placeholder="Post name">
    @error('title')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <button type="submit">Save</button>
</form>
@endsection

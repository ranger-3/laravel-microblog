@extends('layouts.base')

@section('content')
<h3>Create new post</h3>
<p><strong><i><a href="{{ route('posts.index') }}">See all posts</a></i></strong></p>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" placeholder="Post name" value="{{ old('title') }}">
    @error('title')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <br><br>

    <label for="content">Content:</label>
    <textarea name="content" rows="5" placeholder="Write your post here...">{{ old('content') }}</textarea>
    @error('content')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <br><br>
    <button type="submit">Save</button>
</form>
@endsection

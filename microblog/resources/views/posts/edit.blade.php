@extends('layouts.base')

@section('content')
<h3>Edit post</h3>

<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    <textarea name="content" rows="5">{{ old('content', $post->content) }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection

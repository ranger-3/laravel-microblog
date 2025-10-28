@extends('layouts.base')

@section('content')
    <h3>Info about post (ID: {{ $post->id }})</h3>
    <p><a href="{{ route('posts.index') }}">See all posts</a></p>
    <p>{{ $post->title }}</p>
    <p>{{ $post->content }}</p>
    <p>Author: {{ $post->user->name ?? 'Unknown' }}</p>

    @can('update', $post)
        <p><a href="{{ route('posts.edit', $post) }}">Edit</a></p>
    @endcan

    @can('delete', $post)
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endcan
@endsection

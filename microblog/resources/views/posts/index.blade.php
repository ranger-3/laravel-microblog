@extends('layouts.base')

@section('content')
<h3>All posts</h3>
<p>
    <strong>
        <i>
            <a href="{{ route('posts.create') }}">Create new post</a>
        </i>
    </strong>
</p>
<ul>
    @foreach ($posts as $post)
        <ul>
            <li>
                <p><a href="{{ route('posts.show', $post) }}">ID: {{ $post->id }} - {{ $post->title }}</a></p>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        </ul>
    @endforeach
</ul>
@endsection

@extends('layout')
@section('content')
    <div class="header"></div>
    <div class="container-browser">
        <h1>Edit A Post</h1>
        <form method="POST" action="/blog/{{$post->id}}">
            @csrf
            @method('PUT')
            <label for="title">Title:</label><br>
            <input type="text" name="title" value={{$post->title}}><br>
            <label for="excerpt">Excerpt:</label><br>
            <input type="text" name="excerpt" value={{$post->excerpt}}><br><br>
            <label for="body">Body:</label><br>
            <input type="text" name="body" value={{$post->body}}><br><br>
            <input type="submit" value="Submit">
        </form>
        <h1>Delete A Post</h1>
        <form method="POST" action="/blog/{{ $post->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
@endsection

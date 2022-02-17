
@extends('layout')
@section('content')
    <div class="header"></div>
    <div class="container-browser">
        <h1>Create A Post</h1>
        <form method="POST" action="/blog">
            @csrf
            <label for="title">Title:</label><br>
            <input type="text" name="title" value=""><br>
            <label for="excerpt">Excerpt:</label><br>
            <input type="text" name="excerpt" value=""><br><br>
            <label for="body">Body:</label><br>
            <input type="text" name="body" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
@endsection

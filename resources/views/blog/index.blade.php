@extends('layout')
    @section('content')
    <div class="header"></div>
    <div class="container-browser">
        <article class="all-browsers">
            <h1>Blog Posts</h1>
            <article class="browser">
                @foreach($posts as $post)
                <h2>{{$post->title}}</h2>
                <p>{{$post->excerpt}} <a class="link" href="/blog/{{$post->id}}" target="_blank"> see full post </a></p>
                @endforeach
            </article>
        </article>

    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
    @endsection


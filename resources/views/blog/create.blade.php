
@extends('layout')
@section('content')
    <div class="header"></div>
    <div class="container-browser">
        <h1>Create A Post</h1>
        <form method="POST" action="/blog">
            @csrf
            <label for="title">Title:</label><br>
                <input type="text" name="title" value="{{ old('title') }}"><br>
                    @error('title')
                        <p>{{ $errors->first('title') }}</p>
                     @enderror
            <label for="excerpt">Excerpt:</label><br>
                <input type="text" name="excerpt" value="{{ old('excerpt') }}"><br><br>
                    @error('excerpt')
                        <p>{{ $errors->first('excerpt') }}</p>
                    @enderror
            <label for="body">Body:</label><br>
                <input type="text" name="body" value="{{ old('body') }}"><br><br>
                    @error('body')
                        <p>{{ $errors->first('body') }}</p>
                    @enderror
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
@endsection

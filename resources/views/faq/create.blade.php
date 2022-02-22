@extends('layout')
@section('content')
    <div class="header"></div>
    <div class="container-browser">
        <h1>Submit A Question</h1>
        <form method="POST" action="/faq">
            @csrf
            <label for="question">Question:</label><br>
            <input type="text" name="question" value="{{ old('question') }}"><br>
            @error('question')
            <p>{{ $errors->first('question') }}</p>
            @enderror
            <label for="answer">Answer:</label><br>
            <input type="text" name="answer" value="{{ old('answer') }}"><br><br>
            @error('answer')
            <p>{{ $errors->first('answer') }}</p>
            @enderror
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
@endsection

@extends('layout')
@section('content')
    <div class="header"></div>
    <div class="container-browser">
        <h1>Edit A Question</h1>
        <form method="POST" action="/faq/{{$faq->id}}">
            @csrf
            @method('PUT')
            <label for="question">Question:</label><br>
            <input type="text" name="question" value={{$faq->question}}><br>
            <label for="answer">Answer:</label><br>
            <input type="text" name="answer" value={{$faq->answer}}><br><br>
            <input type="submit" value="Submit">
        </form>
        <h1>Delete A Question</h1>
        <form method="POST" action="/faq/{{ $faq->id }}">
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

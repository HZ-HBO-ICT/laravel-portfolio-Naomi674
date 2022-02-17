@extends('layout')
@section('content')
    <div class="header"></div>
    <div class="container-browser">
        <h1>Submit A Question</h1>
        <form method="POST" action="/faq">
            @csrf
            <label for="question">Question:</label><br>
            <input type="text" name="question" value=""><br>
            <label for="answer">Answer:</label><br>
            <input type="text" name="answer" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
@endsection

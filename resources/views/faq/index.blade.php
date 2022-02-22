@extends('layout')
    @section('content')
    <div class="header"></div>
    <div class="container-browser">
        <article class="all-browsers">
            <h1>FAQs</h1>
            <article class="browser">
                @foreach($faqs as $faq)
                <h2>{{$faq->question}}</h2>
                    <p>{{ $faq->answer }}</p>
                @endforeach
            </article>
        </article>
    </div>
    <div class="content-small">
    </div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
    @endsection


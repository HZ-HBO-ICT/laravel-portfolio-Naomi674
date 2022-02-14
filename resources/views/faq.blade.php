@extends('layout')
    @section('content')
    <div class="header"></div>
    <div class="container-browser">
        <article class="all-browsers">
            <h1>FAQs</h1>
            <article class="browser">
                @foreach($faq as $faqs)
                <h2>{{$faqs->question}}</h2>
                @endforeach
                @foreach($faq as $faqs)
                    <p>{{ $faqs->answer }}</p>
                @endforeach
            </article>
        </article>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
    @endsection


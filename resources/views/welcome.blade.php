@extends ('layout')

    @section('content')
    <div class="header"></div>
    <div class="content-large">
        <h1>Why ICT?</h1>
        <p>The HBO_ICT program suits me because I am a detailed oriented person who also has the patience required to take the time and solve the problems presented to me. Another reason I am well suited for the ICT program is because I love learning and the ICT field is constantly growing and changing which requires the people in the field to be constantly willing to learn to stay on top of the changes. Lastly I am well suited for ICT because, I love being faced with problems/challenges and then working to better understand why the problem occurred and how to fix it.
        </p>
        <h1>My Motivation</h1>
        <p>My motivation for ICT is wanting to make a meaningful impact on the world around me. Computers are the way the world works now and in the future, there is a lot of work to be done in this field and a lot of opportunities for growth. I also want to make an impact in way that will allow me to live a comfortable life. In a lot of fields that offer meaningful work, like social work, they don’t pay very well which can cause the quality of life to be diminished for the people that are employed by the field. With ICT I can still make and impact and make a decent amount of money. Lastly I chose ICT because I want to feel like I’m contributing, and be able to see the output from the work I’m putting in. When I was doing research on some of the other fields that I was considering one complaint that came up regularly was that people didn’t always feel accomplished because they couldn’t see the output of their work. This didn’t seem to be as big of a problem in ICT. Like with this website, I put in all of this work and I can actively see where it went and what I accomplished. I choose to study in the Netherlands because the politics of the country closely align with my personal beliefs and because of its location in Europe it is easy to travel to a lot of different countries.
        </p>
    </div>
    <div class="content-small">
        <img src="img/seniorpicture.jpg" alt="senior picture" style="width:300px;height:400px;">
    </div>
    <div class="content-small">
        <div class="list">
            @foreach($posts as $post)
            <h3><a class="link" href="/posts/{{$post->id}}" target="_blank"> {{$post->title}} </a></h3>
            <ul>
                <li>{{$post->excerpt}}</li>
            </ul>
            @endforeach
        </div>
        <img src="img/sanddune.JPG" alt="Me on top of a sand dune" style="width:300px;height:200px; margin-top: 25px;">
    </div>
    <div class="footer">
    </div>
    @endsection

@extends('layout')

@section('main')

<div class = "parent-div" style="height:400px;" > 
    <img src="{{asset('IMAGES/me.webp')}}" alt="Hello that is me" width = '240' height ='270'>
    <div class = "child-div" id="about-text" style="height:fit-content;margin-top: auto;">
        <h1>About Me</h1>
        <p>Hello,</p> 
        <p>I Am Evita and this blog is created as a part of my CSCM48  Coursework at Swansea University.</p>
        <p>The blog is designed based on Model-View-Controller architecture and uses the Laravel php framework
        <p>In this blog, a registered user can post and interact with other users' post.
        Admin can moderate all user posts.
        Guests can view all posts without interacting with them.</p>
</div>
@endsection

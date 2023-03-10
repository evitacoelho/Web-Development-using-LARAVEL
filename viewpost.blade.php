@extends('layout')

@section('ribbon')
    <div class = "ribbon-items">
            <h2 class="first-child-ribbon">Hello {{Auth::user()->name}}</h2>
            <input id="ribbon-button" type="button" onclick="location.href='{{route('create', ['id'=> 0])}}';" value="Create Post" />
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/contact')}}';" value="Contact" />
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/about')}}';" value="About" />
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/destroy')}}';" value="Logout" />
    </div>
@endsection


@section('sidebar')
<div class = "sidebar-items">
    <input id="sidebar-button" type="button" onclick="location.href='{{route('myposts',['id'=> Auth::user()->id])}}';" value="My Posts" />
    <input id="sidebar-button" type="button"  onclick="location.href='{{route('mycomments',['id'=>Auth::user()->id])}}';" value="My Comments" />
    <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    </div>
</div>
@endsection

@section('main')
<div class = "view-container">
    <h1 style="margin: 0">{{ $post->title }}</h1>
    By: {{$author_name}}<br>
    {{-- <div class = "view-items" style="background-image: url({{asset($post->imgpath)}}); background-size: cover; 
        background-repeat: no-repeat; background-position:center" > --}}
    Views:{{ $post->views}} 
    Likes:{{ $post->likes }} 
    <img src="{{asset($post->imgpath)}}"width="700" height="400" style="align-self: center"><br>
    {{$post->content}}<br>
    <ul>
        @foreach($comments as $comment)
            <li style="border: 1px solid brown; font-weight:600; background-color:#f8d6e4">{{ $comment->comment }}</li>
            <a>Comment by:{{$comment->email}}</a>
        @endforeach
        </ul>
    
</div>
<div style="display: flex; flex-direction: column; height: auto; background-color: white;">
    <input class = "blog-button" type="button" onclick="location.href = '{{ route('commentform', ['pid' => $post->id])}}';" value="Comment" />
    <input class = "blog-button" type="button" onclick="location.href = '{{ route('create', ['id' => $post->id])}}';" value="Edit Post"/>
    <input class = "blog-button" type="button" onclick="location.href = '{{ route('deletepost', ['id' => $post->id])}}';" value="Delete Post" />
    <input class = "blog-button" type="button" onclick="location.href = '{{ route('dashboard')}}';" value="Back" />
</div>
@endsection





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
    <input id="sidebar-button" type="button"  value="My Comments" />
    <input id="sidebar-button" type="button" onclick="location.href='{{route('dashboard')}}';" value="Dashboard" />
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
    <div class = "blog-container">
        @foreach ($comments as $comment)
           
           <li> {{$comment->comment}} for Post titled <a href = {{ route('viewpost', ['id' => $pids[$loop->index]])}} >{{$titles[$loop->index]}} </a></li>
        @endforeach
            
                
    </div>
@endsection

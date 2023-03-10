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
    <input id="sidebar-button" type="button" onclick="location.href='{{route('mycomments',['id'=>Auth::user()->id])}}';" value="My Comments" />
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
        @foreach ($posts as $post)
            <div class = "blog-items" style="background-image: url({{asset($post->imgpath)}}); background-size: cover; 
            background-repeat: no-repeat; background-position:center " >
                {{ $post->title }}<br>
                By: {{$authors[$loop->index]}}<br>
                <img src="{{asset($post->imgpath)}}"width="200" height="200" hidden>
                {{-- {{ $post->content }}<br> --}}
                Views:{{ $post->views}}
         
                <br>
                <input class="visit-button" type="button" onclick="location.href = '{{ route('viewpost', ['id' => $post->id]) }}';" value="View Post" />
            </div>
        @endforeach
        <?php 
            echo '<div >';
            echo $posts->links();
            echo '</div>'
        ?>
    </div> 
@endsection




@extends('layout')

@section('ribbon')
    <div class = "ribbon-items">
            <h2 class="first-child-ribbon">Hello Guest</h2>
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/login')}}';" value="Log in" />
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/register')}}';" value="Register" />
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/contact')}}';" value="Contact" />
            <input id="ribbon-button" type="button" onclick="location.href='{{url('/about')}}';" value="About" />
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
                <input class="visit-button" type="button" onclick="location.href = '{{ route('login') }}';" value="View Post" />
            </div>
        @endforeach
        <?php 
            echo '<div >';
            echo $posts->links();
            echo '</div>'
        ?>
    </div> 
@endsection

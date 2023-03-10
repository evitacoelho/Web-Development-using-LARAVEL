@extends('layout')

@section('main')
<div class = "start-container">
    <div class = "start-items">
        <h1>WELCOME TO MY BLOG</h1><br>
        <div>
            <input id="option-button" type="button"  onclick="location.href='{{url('/guest')}}';" value="Continue as Guest" />
            <input id="option-button" type="button" onclick="location.href='{{url('/register')}}';" value="Register" />
            <input id="option-button" type="button" onclick="location.href='{{url('/login')}}';" value="Log in" />
        </div>
    </div>
</div>
@endsection



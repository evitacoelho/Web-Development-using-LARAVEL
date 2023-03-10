@extends('layout')

@section('main')
@isset($status)
    <div class="bg-red-400 text-white text-4xl text-center h-14" >
        {{$status}}
    </div> 
@endisset
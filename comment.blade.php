@extends('layout')
@section('head')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('main')

<div class='form-container'>
    <h1>Comment on Post</h1>
    <form class='form-items' action="{{ route('postcomment', ['pid' => $pid]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input style="height: 100px" name = "commentbox" id="commentbox" type="text" placeholder="Add your commment here">
        @error('commentbox')
            {{-- The $attributeValue field is/must be $validationRule --}}
            <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
        @enderror
        <br>
        <input class="form-button" type="submit" value="Submit Comment" />
    </form>
</div>    
@endsection


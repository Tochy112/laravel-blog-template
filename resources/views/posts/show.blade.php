@extends('layout.layout')

@section('title', 'Blog')

@section('contents')
    <div class="bck-div">
        <a href="{{route('posts.index')}}" type="button">Back</a>
    </div>
    <div class="box">
        <h2>{{$posts->title}}</h2>
        <h2>{{$posts->body}}</h2>
        <h4>post created on {{$posts->created_at}}</h4>

        <button><a href="{{route('posts.edit', ["post" => $posts->id]) }}">Edit</a></button>
        
        <form action="{{route('posts.destroy', ["post" => $posts->id]) }}" method="POST">
            @csrf
            @method('DELETE') 
            <button type="submit">Delete</button>
        </form>
        
    </div>
    
    
@endsection
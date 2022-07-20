@extends('layout.layout')

@section('title', 'Blog page')

@section('contents')
    
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            
            <div class="box">
                <h2><a href="{{route('posts.show', ['post' => $post->id])}}">{{$post->title}}</a></h2>
                <h4>post created on {{$post->created_at}}</h4>
            </div>
        @endforeach
    @endif
    
@endsection
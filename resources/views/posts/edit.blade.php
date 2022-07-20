@extends('layout.layout')

@section('title', 'Edit')

@section('contents')
    <form action="{{route('posts.update', ['post' => $posts->id])}}" method="POST">
        @csrf
        @method('PUT') 

        <label for="title">Title</label>
        <input type="text" value="{{$posts->title}}" placeholder="Enter title" name="title" required>


        <label for="body">Body</label>
        <textarea name="body"  placeholder="Type in a text" cols="30" rows="10" required>{{$posts->body}}</textarea>


        <button type="submit">Update</button>
    </form>
@endsection
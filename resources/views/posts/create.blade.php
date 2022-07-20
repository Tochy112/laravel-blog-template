@extends('layout.layout')

@section('title', 'Home page')

@section('contents')
    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" placeholder="Enter title" name="title" required>

        <label for="body">Body</label>
        <textarea name="body" placeholder="Type in a text" cols="30" rows="10" required></textarea>

        <button type="submit">Create</button>
    </form>
@endsection
@extends('layout.postLayout')

@section('content')
<p class="mssg">
    {{session('mssg')}}
</p>
@foreach($post as $post)
<div>
    <h2>{{$post->title}}</h2>
    <p>{{$post->description}}</p>
    <a href="/viewPost/{{$post->id}}">Read More</a>
</div>
@endforeach
@endsection
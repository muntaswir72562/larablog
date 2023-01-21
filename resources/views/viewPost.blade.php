@extends('layout.postLayout')

@section('content')

<div>
    <div>
        <h2>
        {{$post->title}}
        </h2>
        <h5>{{$post->description}}</h5>
        <p>
        {{$post->content}}
        </p>
        <form action="/post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>delete</button>
        </form>
    </div>
</div>
@endsection
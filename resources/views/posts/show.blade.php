@extends('layouts.app')

@section('content')
    <a href='./posts' class='btn btn-default'>Go Back</a>
    <img style="width:80%" src="./storage/cover_images/{{$post->cover_image}}">
    <h1>{{$post->title}}</h1>
    <small>published on: {{explode(' ', $post->created_at)[0]}} by {{$post->user->name}}</small>
    <hr />
    <div>
        {!!$post->body!!}
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id === $post->user_id)
            <a href="./posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
    
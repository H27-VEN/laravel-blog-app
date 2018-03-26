@extends('layouts.app')

@section('content')
    <div class='card text-center'>
         <div class="container">
            <h1>{{$title}}</h1>
            <p>This is a demo app</p>
            <img src="{{ asset('images/welcome.jpg') }}" width="650px" height="650px" />
            <h6>Image credits:<a href='https://www.freepik.com/free-vector/coloured-door-background_899302.htm'>Designed by Freepik</a></h6>
            {{--  <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>  --}}
         </div>
    </div>
@endsection  
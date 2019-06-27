@extends('layouts.app')


@section('content')
      <div class="jumbotron text-center">
       

        <h1>{{$post->title}}</h1>
        <img style="width:20%" src="/storage/filename/{{$post->filename}}">
        <p>{{$post->body}}</p>
        <hr>
        <small>Written at{{$post->created_at}} by {{$post->user->name}}</small>
        
      </div>

    @if(!Auth::guest())
     @if(!Auth::user()->id == $post->user_id)
   <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

   <hr>
   <a href="/posts" class="btn btn-default">Go Back</a> 

   <form action="{{action('PostsController@destroy', $post->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
     @endif     
    @endif      

          
      

@endsection

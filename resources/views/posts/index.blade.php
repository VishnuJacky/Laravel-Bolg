@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <style>
.center {
    text-align: left;
    border: 5px solid white;
}
</style>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <hr>
            <//div class="center">
            <div class="well">
                <div class="row">
                     <div class="col-md-4 col-sm-4">
                        <img style="width:40%" src="/storage/filename/{{$post->filename}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <SMALL>Written on {{$post->created_at}} by {{$post->user->name}}</SMALL>
                    </div>
                </div>
            </div>
        @endforeach

        
    @else
        <p>No posts found</p>
    @endif
@endsection
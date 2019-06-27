@extends('layouts.app')


@section('content')
    <h1>Edit Post</h1>

        <form action="{{action('PostsController@update', $post->id)}}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}

             <input name="_method" type="hidden" value="PUT">
                
                    <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title", type="text" value="{{$post->title}}" class="form-control" placeholder="Title" />
                    <label for='body'>Body</label>
                    <textarea name="body" class="form-control" rows="10" value="{{$post->body}}" placeholder="Here goes your content..."></textarea>
                    <div class="form-group col-md-4">
                    <input type="file" name="filename">    
                    </div>
                </div>
                

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection
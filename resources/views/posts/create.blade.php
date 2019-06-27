@extends('layouts.app')


@section('content')
    <h1>Create Post</h1>

        <form action="/posts" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
                <div class="form-group">
                     <div class="row">
          <//div class="col-md-4"></div>
          <//div class="form-group col-md-4">
          </div>

                    <label for="title">Title</label>
                    <input name="title" type="text" value="" class="form-control" placeholder="Title" />

                    <label for='body'>Body</label>
                    <textarea name="body" class="form-control" rows="10" placeholder="Here goes your content..."></textarea>
                    
                    
                    <div class="form-group col-md-4">
                    <input type="file" name="filename">    
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
        </form>

@endsection
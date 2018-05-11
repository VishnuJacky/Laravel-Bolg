<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INDEX</title>      
    </head>
    <body>
    <h1>POSTS</h1>

          @if(count($posts)>0)
           @foreach($posts as $post)
             <div class="well">

                <h2> {{$post->title}} </h2>
                <h3> {{$post->body}} </h3>
                 <small> Written on {{$post->created_at}} </small>
                
              </div>
           @endforeach
           
           @else
           <p>No posts found</p>

          @endif
  
       

    </body>
</html>

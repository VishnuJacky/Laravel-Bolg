<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INDEX</title>      
    </head>
    <body>
    <h1>Create Posts</h1>

        <form action="/posts" method="post">
           {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" value="" class="form-control" placeholder="Title" />
                    <label for='body'>Body</label>
                    <textarea name="body" class="form-control" rows="10" placeholder="Here goes your content..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </body>
</html>

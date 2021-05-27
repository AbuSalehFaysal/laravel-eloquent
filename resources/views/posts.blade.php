<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-4">
                    <a class="btn btn-primary" href="/add-post">Add New Post</a>

                </div>

            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if(Session::has('post_deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('post_deleted')}}
                    </div>
                    @endif
                    <div class="card">
                        @foreach($posts as $post)
                        <div class="card-header">{{$post->title}}</div>
                        <div class="card-body">
                            {{$post->body}}
                        </div>
                        <div class="card-footer">
                            <a href="/post/{{$post->id}}" class="btn btn-info">View Post</a>
                            <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete Post</a>
                            <a href="/edit-post/{{$post->id}}" class="btn btn-primary">Edit Post</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
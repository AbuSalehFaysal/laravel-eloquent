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
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">Create Post Form</div>
                        <div class="card-body">
                            @if(Session::has('post_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_updated')}}
                            </div>
                            @endif
                            <form method="POST" action="{{route('post.updated')}}">
                                @csrf 
                                <input type="hidden" name="id" value="{{$post->id}}">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" id="" class="form-control" value="{{$post->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="body">Post Body</label>
                                    <textarea name="body" id="" cols="" rows="3" class="form-control" value="">{{$post->body}}</textarea>
                                </div>
                                <button class="btn btn-success" type="submit">Update Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
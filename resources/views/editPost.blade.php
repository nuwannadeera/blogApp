<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task App</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="text-center">
        <div class="pull-left">
            <h2>Edit Post</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('updatePost',$post->id)}}" method="POST" enctype="multipart/form-data"
                      style="width: 700px;margin-left: 210px">
                    @csrf
                    <div class="form-group">
                        <label style="font-weight: bold">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title"
                               value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold">Content</label>
                        <input type="text" class="form-control" placeholder="Enter Content" name="content"
                               value="{{ $post->content }}">
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold">Author E-mail</label>
                        <input type="email" class="form-control" name="author" placeholder="Enter Author Mail"
                               value="{{ $post->author }}">
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Add Image">
                        <img src="/images/{{ $post->image }}" width="100px" height="100px">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Update Post</button>
                    <a class="btn btn-primary" href="{{ route('post') }}"> Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

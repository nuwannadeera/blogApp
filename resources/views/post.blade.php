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
        <div style="font-size: 30px">
            Blog App
        </div>
        <div class="row">
            <div class="col-md-12">

                @foreach($errors->all() as $error)
                    <div role="alert" class="alert alert-danger">{{$error}}</div>
                @endforeach

                <form action="{{route('savePost')}}" method="POST" enctype="multipart/form-data"
                      style="width: 700px;margin-left: 210px">
                    @csrf
                    <div class="form-group">
                        <label style="font-weight: bold">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title">
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold">Content</label>
                        <input type="text" class="form-control" placeholder="Enter Content" name="content">
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold">Author E-mail</label>
                        <input type="email" class="form-control" name="author" placeholder="Enter Author Mail">
                    </div>
                    <div class="form-group">
                        <label style="font-weight: bold">Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Add Image">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Save Post</button>
                </form>
                <br>
                <table class="table table-dark table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Author</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($postList as $data)
                        <tr>
                            <td scope="row">{{$data->title}}</td>
                            <td scope="row">{{$data->content}}</td>
                            <td scope="row">{{$data->author}}</td>
                            <td>
                                <img src="/images/{{$data->image}}" width="100px" height="100px">
                            </td>
                            <td>
                                <a href="{{route('editPost',$data->id)}}" class="btn btn-dark">Edit</a>
                                <a href="{{route('deletePost',$data->id)}}}" class="btn btn-dark">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</body>
</html>

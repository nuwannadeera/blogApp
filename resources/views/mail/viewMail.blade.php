<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Comment Notification</title>
</head>
<body>
<p style="font-weight: bold">
    Hello....,
</p>
<p>
    A new comment has been posted on your post "{{ $post->title }}".
</p>
<p>
    Comment: {{ $comment->comment }}
</p>

<p>
    Thank you for using our blog application!
</p>
</body>
</html>

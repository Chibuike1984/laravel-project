<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit post</h1>
    <form action="/edit-post/{{$post->id}}" method='POST'>
        @csrf
        @method('PUT')
        <input type="text" value="{{$post->title}}" name="title">
        
        <textarea  name="body">{{$post->body}}</textarea>
        <button>save changes</button>
    </form>
</body>
</html>
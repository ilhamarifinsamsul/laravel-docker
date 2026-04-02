<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        <label for="content">Konten</label>
        <input type="text" name="content" id="content" value="{{ $post->content }}">
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
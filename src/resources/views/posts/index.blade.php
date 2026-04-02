<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Posts</h1>
    <a href="{{ route('posts.create')}}">Tambah Data</a>

    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Judul</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Konten</label>
        <input type="text" name="content" id="content">
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>
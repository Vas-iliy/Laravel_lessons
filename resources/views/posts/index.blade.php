<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
<h1>Список постов</h1>
<ul>
    <li>
        <a href="{{route('posts.show', ['post' => 1])}}">Post1</a>
        <a href="{{route('posts.edit', ['post' => 1])}}">Edit</a>
        <form action="{{route('posts.destroy', ['post' => 1])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['post' => 2])}}">Post2</a>
        <a href="{{route('posts.edit', ['post' => 2])}}">Edit</a>
        <form action="{{route('posts.destroy', ['post' => 2])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['post' => 3])}}">Post3</a>
        <a href="{{route('posts.edit', ['post' => 3])}}">Edit</a>
        <form action="{{route('posts.destroy', ['post' => 3])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </li>
</ul>
</body>
</html>

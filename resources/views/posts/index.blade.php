{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | posts</title>
</head>
<body>
    <h1>Aquí se mostrarán todos los posts</h1>
</body>
</html> --}}

<x-app-layout>

    <h1>Aquí se mostrarán todos los posts</h1>
    <a href="{{route('posts.create')}}">
        Crear Nuevo Post
    </a>

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{route('posts.show', $post->id)}}">
                {{ $post->title }}
            </a>
        </li>
        @endforeach
    </ul>
    {{$posts->links()}}
</x-app-layout>


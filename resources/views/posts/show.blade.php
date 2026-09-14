<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | posts</title>
</head>
<body>
    {{-- <h1>Aquí se mostrará el post {{ $post }}</h1>
    @if (false)
        <p>Contenido de prueba</p>
    @endif --}}
    <a href="{{route('posts.index')}}">Volver a la lista de posts</a>
    <h1>Título: {{$post->title}}</h1>
    <p>
        <b>Categoría: </b> {{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>
    <a href="{{route('posts.edit',$post->id)}}">
        Editar Post
    </a>
    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar post
        </button>
    </form>
</body>
</html>

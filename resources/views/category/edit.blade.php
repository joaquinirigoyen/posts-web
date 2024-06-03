<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar | PWA</title>
</head>

<body>
    <h1>Modificar post {{ $post->id }}</h1>
    <form action="{{route('category.show',$post->id) }}" method="post">

        @csrf {{-- Token para evitar suplantacion de datos --}}
        @method('put')
        <label>Titulo:
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <br>
        <label>Poster:
            <input type="text" name="poster" value="{{ $post->poster }}">
        </label>
        <br>
        <br>
        <label>Contenido:
            <textarea name="content">{{ $post->content }}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Post</button>
    </form>
    

    <a href="{{route('category.index')}}">Cancelar</a>
</body>

</html>

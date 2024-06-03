<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category | PWA</title>
</head>
<body>
  <h1>Titulo "{{$post->title}}"</h1>
  <p>
    <b>Poster: </b>{{$post->poster}}
  </p>
  <p>
    <b>Contenido: </b>{{$post->content}}
  </p>
  <p>
    <b>Habilitado: </b>{{$post->habilitated}}
  </p>
  <a href="{{route('category.index')}}">Volver</a> <a href="{{route('category.edit',$post->id)}}">Editar</a> 
  <form action="{{route('category.show',$post->id)}}" method="post">
    @csrf
      @method('delete')
      <button type="submit">Eliminar Post</button>
  </form>
</body>
</html>
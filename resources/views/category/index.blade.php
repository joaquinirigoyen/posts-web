<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index | PWA</title>
</head>
<body>
  <a href="category/create">Crear Nuevo Post</a>
  <h1>Listado de categorías</h1>
  <ul>
  @foreach ($posts as $post)
      <li>
        <a href="/category/show/{{$post->id}}">{{ $post->title}}
          </a>
  @endforeach
  </ul>
</body>
</html>
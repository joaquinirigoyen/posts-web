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
  <a href="/category">Volver</a>
</body>
</html>
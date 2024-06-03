<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crear Post | PWA</title>
</head>
<body>
  <h1>Formulario para crear nuevo Post</h1>
  <form action="/category" method="post">
    @csrf {{-- Token para evitar suplantacion de datos --}}
    <label>Titulo:
      <input type="text" name="title">
    </label>
    <br>
    <br>
    <label>Poster:
      <input type="text" name="poster">
      </label>
      <br>
      <br>
      <label>Contenido:
        <textarea name="content"></textarea>
      </label>
      <br>
      <br>
      <button type="submit">Crear Post</button>
  </form>
</body>
</html>
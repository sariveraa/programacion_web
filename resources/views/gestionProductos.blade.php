<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('producto.store')}}" method="POST">
        @csrf
        <label>Nombre</label>
        <input id="nombre" name="nombre" type="text">
        <label>Descripcion</label>
        <input id="descripcion" name="descripcion" type="text">
        <label>Precio</label>
        <input name="precio" type="number">
        <input type="submit" name="Enviar">
    </form>
</body>
</html>
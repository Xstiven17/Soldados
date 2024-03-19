<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soldado</title>
</head>

<body>
    <form action="{{route('storeSoldado')}}" method="POST">
        @csrf
        <input type="text" placeholder="codigo" name="codigo">
        <input type="text" placeholder="nombres" name="nombres">
        <input type="text" placeholder="apellidos" name="apellidos">
        <input type="text" placeholder="grado" name="grado">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
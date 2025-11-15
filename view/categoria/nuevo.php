<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo</title>
</head>
<body>
<form action="index.php?entidad=Categoria&accion=grabar" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <label for="estado">Estado: </label>
    <select name="estado" id="">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
        <input type="submit" value="Registrar">
    </select>
</form>
</body>
</html>
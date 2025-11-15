<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php?entidad=Categoria&accion=nuevo">Nueva Categoria</a>
    </nav>
</header>
<?php
$entidad = $_GET["entidad"] ?? "Categoria";
$accion = $_GET["accion"] ?? "listar";

require_once "controller/Controller{$entidad}.php";

$clase = "Controller{$entidad}";
$controlador = new $clase;
$controlador->$accion();
?>

</body>
</html>
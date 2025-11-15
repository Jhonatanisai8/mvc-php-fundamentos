<?php
require_once "model/Categoria.php";

class ControllerCategoria
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Categoria();
    }

    public function listar()
    {
        $categorias = $this->modelo->listar_categorias();
        require_once "view/categoria/listar_categorias.php";
    }

    public function nuevo()
    {
        require_once "view/categoria/nuevo.php";
    }

    public function grabar()
    {
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];
        $this->modelo->registrar($nombre, $estado);
        header("location:index.php");
    }
}
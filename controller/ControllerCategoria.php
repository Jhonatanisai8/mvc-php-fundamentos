<?php
require_once "model/Categoria.php";

class ControladorCategoria
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Categoria();
    }

    public function listar_clientes()
    {
        $categorias = $this->modelo->listar_categorias();
        return $categorias;
    }
}
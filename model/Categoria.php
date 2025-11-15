<?php
require_once "services/Conexion.php";

class Categoria
{
    private $conPDO;

    public function __construct()
    {
        $this->conPDO = Conexion::conectarBD();
    }

    public function listar_categorias()
    {
        $sql = "SELECT id_categoria,nombre,estado FROM categoria";
        $stm = $this->conPDO->query($sql);
        return $stm->fetchAll();
    }
}
<?php

class Conexion
{
    public static function conectarBD()
    {
        define("SERVIDOR", "localhost");
        define("USUARIO", "root");
        define("PASSWORD", "753159852");
        define("DATABASE", "demo_labotario_11");
        define("PORT", 3306);
        define("CHARSET", "utf8");
        $dsn = "mysql:host=" . SERVIDOR . ";port=" . PORT . ";dbname=" . DATABASE . ";charset=" . CHARSET;
        try {
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            return new PDO($dsn, USUARIO, PASSWORD, $opciones);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
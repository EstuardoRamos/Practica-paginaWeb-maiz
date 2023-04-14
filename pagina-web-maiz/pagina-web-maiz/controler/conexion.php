<?php

class Conexion {

    private $host = "localhost";
    private $dbname = "maiz";
    private $usuario = "root";
    private $password = "";
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->password);
            echo "conetado correctamente: " ;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

}

?>

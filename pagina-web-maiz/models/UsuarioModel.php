<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//require_once 'controler/conexion.php';
include 'conection.php';

class UsuarioModel {
    private $pdo;
    

    public function __construct() {
        $conexion = new Conexion();
        $this->pdo = $conexion;
    }

    public function registrarUsuario($nombre, $correo, $contrasena) {
        $sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (:nombre, :correo, :contrasena)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
    
        if ($stmt->execute()) {
            echo "El usuario se ha registrado exitosamente.";
            return true;
        } else {
            echo "Ocurrió un error al registrar el usuario.";
            $error = $stmt->errorInfo();
        echo "Error al registrar usuario: " . $error[2];
        
            return false;
        }
    }

    public function existeCorreo($correo) {
        $sql = "SELECT COUNT(*) as count FROM usuarios WHERE correo = :correo";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['count'] > 0;
    }
}

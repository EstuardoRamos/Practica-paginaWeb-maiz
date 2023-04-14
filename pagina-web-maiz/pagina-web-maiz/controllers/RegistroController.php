<?php

require_once 'models/UsuarioModel.php';

class RegistroController {

    public function index() {
        require_once 'registro.php';
    }

    public function registrar() {
        // Obtener los datos del formulario de registro
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $confirmar_contrasena = $_POST['confirmar_contrasena'];
        echo "entrado al metodo registrar";
        // Verificar si la contraseña y la confirmación de contraseña coinciden
        if ($contrasena != $confirmar_contrasena) {
            $error = 'Las contraseñas no coinciden.';
            require_once 'registro.php';
            exit;
        }
        echo "Aqui ya vericamos las contraseñas";

        // Verificar si el correo electrónico ya está registrado
        $usuario_model = new UsuarioModel();
        if ($usuario_model->existeCorreo($correo)) {
            $error = 'El correo electrónico ya está registrado.';
            require_once 'registro.php';
            exit;
        }

        // Registrar el nuevo usuario en la base de datos
        $usuario_model->registrarUsuario($nombre, $correo, $contrasena);

        // Redirigir al usuario a la página de inicio de sesión
        header('Location: index.php');
    }

}
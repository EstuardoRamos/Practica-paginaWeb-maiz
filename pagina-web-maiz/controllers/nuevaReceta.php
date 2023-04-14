<?php

class NuevaReceta extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

    function render(){
        echo "entramos en la funcion render recetas otra vex";
        $recetas = $this->view->datos = $this->model->get();
        $this->view->recetas = $recetas;
        $this->view->render('alimentos/alimentos');
        echo "Se renderizp";
    }   

    

    function crear(){
        echo 'estamos creando';
        $autor_receta = $_POST['autor_receta'];
        $nombre_receta    = $_POST['nombre_receta'];
        $ingredientes  = $_POST['ingredientes'];
        $instrucciones  = $_POST['instrucciones'];
        echo 'seguimos creando';

        if($this->model->insert(['autor_receta' => $autor_receta, 'nombre_receta' => $nombre_receta, 'ingredientes' => $ingredientes, 'instrucciones' => $instrucciones])){
            //header('location: '.constant('URL').'nuevo/alumnoCreado');
            echo 'se pudo crear';
            $this->view->mensaje = "Alumno creado correctamente";
            $this->render();
            //$this->render();
        }else{
            echo 'no se pudo crear';
            $this->view->mensaje = "La matrícula ya está registrada";
            //$this->render();
            $this->render();
        }
    }

}

?>
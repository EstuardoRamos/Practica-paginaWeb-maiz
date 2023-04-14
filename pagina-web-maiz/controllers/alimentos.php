<?php

class Alimentos extends Controller{
    function __construct(){
        parent::__construct();

        $this->view->mensaje = "";
    }

    function render(){
        $recetas = $this->view->datos = $this->model->get();
        
        $this->view->recetas = $recetas;
        $this->view->render('alimentos/alimentos');
    }   

    function crear(){
        //echo 'estamos creando';
        $autor_receta = $_POST['autor_receta'];
        $nombre_receta    = $_POST['nombre_receta'];
        $ingredientes  = $_POST['ingredientes'];
        $instrucciones  = $_POST['instrucciones'];

        if($this->model->insert(['autor_receta' => $autor_receta, 'nombre_receta' => $nombre_receta, 'ingredientes' => $ingredientes, 'instrucciones' => $instrucciones])){
            //echo 'se pudo crear';
            $this->view->mensaje = "Su receta ha sido ingresada";
            $this->render();
        }else{
            //echo 'no se pudo crear';
            $this->view->mensaje = "Su receta no ha sido ingresada";
            //$this->render();
            $this->render();
        }
    }

    function verReceta($param = null){
        $idReceta = $param[0];
        $receta = $this->model->getById($idReceta);

        session_start();
        $_SESSION["id_verReceta"] = $receta->autor;

        $this->view->receta = $receta;
        $this->view->render('consulta/detalle');
    }
    
}

?>
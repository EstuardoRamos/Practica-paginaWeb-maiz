<?php



class Variedades extends Controller{
    function __construct(){
        parent::__construct();

        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('variedades/index');
    }

    function crear(){
        //echo 'estamos creando';
        $usuario = $_POST['usuario'];
        $color_favorito    = $_POST['color_favorito'];
        

        if($this->model->insert(['usuario' => $usuario, 'color_favorito' => $color_favorito ])){
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
    
}

?>
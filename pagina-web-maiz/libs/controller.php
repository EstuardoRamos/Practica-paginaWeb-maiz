<?php

class Controller{

    function __construct(){
        $this->view = new View();
    }

    function loadModel($model){
        $url = 'models/'.$model.'model.php';
        //echo "nodel $url";
        if(file_exists($url)){
            require $url;
            
            $modelName = $model.'Model';
           // echo "model 2 $modelName";
            $this->model = new $modelName();
        }
    }
}

?>
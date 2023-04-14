<?php

require 'models/receta.php';

class VariedadesModel extends Model{

    public function __construct(){
        parent::__construct();
    }

   

    public function insert($datos){
        // insert   ar
       // echo 'entrando a insertar fav';
        $query = $this->db->connect()->prepare('INSERT INTO maiz_favorito(usuario, color_favorito)  VALUES(:usuario, :color_favorito)');
        try{
            $query->execute([
                'usuario' => $datos['usuario'],
                'color_favorito' => $datos['color_favorito']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
        
    }


    
}
?>
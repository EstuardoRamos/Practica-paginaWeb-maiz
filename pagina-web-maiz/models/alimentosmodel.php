<?php

require 'models/receta.php';

class AlimentosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM recetas');
            
            while($row = $query->fetch()){
                $item = new Receta();
                $item->autor = $row['autor_receta'];
                $item->receta    = $row['nombre_receta'];
                $item->ingredientes  = $row['ingredientes'];
                $item->instrucciones  = $row['instrucciones'];

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function insert($datos){
        // insert   ar
        echo 'entrando a insertar';
        $query = $this->db->connect()->prepare('INSERT INTO recetas(autor_receta, nombre_receta, ingredientes, instrucciones)  VALUES(:autor_receta, :nombre_receta, :ingredientes, :instrucciones)');
        try{
            $query->execute([
                'autor_receta' => $datos['autor_receta'],
                'nombre_receta' => $datos['nombre_receta'],
                'ingredientes' => $datos['ingredientes'],
                'instrucciones' => $datos['instrucciones']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
        
    }

   public function getById($id){
        $item = new Receta();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM recetas WHERE matricula = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $item->autor = $row['autor_receta'];
                $item->receta    = $row['nombre_receta'];
                $item->ingredientes  = $row['ingredientes'];
                $item->instrucciones  = $row['instrucciones'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }


    
}
?>
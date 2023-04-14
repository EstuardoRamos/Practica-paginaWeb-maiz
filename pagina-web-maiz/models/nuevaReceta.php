<?php



class NuevaReceta extends Model{

    public function __construct(){
        parent::__construct();
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
}

?>
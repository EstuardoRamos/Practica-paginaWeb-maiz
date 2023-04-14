<?php



class NuevaRecetaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        echo 'entrando a insertar 1';
        $query = $this->db->connect()->prepare('INSERT INTO recetas (autor_receta, nombre_receta, ingredientes, instrucciones) VALUES(:autor_receta, :nombre_receta, :ingredientes, :instrucciones)');
        try{
            $query->execute([
                'autor_receta' => $datos['autor_receta'],
                'nombre_receta' => $datos['nombre_receta'],
                'instrucciones' => $datos['instrucciones'],
                'ingredientes' => $datos['ingredientes']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
        
    }
}

?>
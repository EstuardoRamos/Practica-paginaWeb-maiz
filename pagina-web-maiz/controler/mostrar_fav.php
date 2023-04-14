<?php
    include 'conection.php';
	$sql = "SELECT color_favorito, COUNT(*) AS cantidad FROM maiz_favorito GROUP BY color_favorito";
    $resultado = mysqli_query($conexion, $sql);
    
?>
<?php
	include 'conection.php';
    $usuario = $_POST['usuario'];
    $color_favorito = $_POST['color_favorito'];

    $query = "INSERT INTO maiz_favorito(usuario, color_favorito) 
            VALUES ('$usuario', '$color_favorito' )";
    $ejecutar = mysqli_query($conexion, $query);    
    if($ejecutar){
        $URL= constant('URL');
        //$URL= constant('URL');
        echo '<script>
                alert("Tu maiz favorito fue ingresado");
                window.location="%s/variedades";
            </script>', $URL;
        exit;
           // $this->view->render('variedades/index');
    }    
?>
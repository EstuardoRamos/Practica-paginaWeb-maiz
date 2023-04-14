<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alimentos</title>

  <link rel="stylesheet" href="<?php echo constant('URL'); ?>assets/css/style.css">
</head>

<body>
  <div id="contenido">
  </div>
  <?php require 'views/header.php'; ?>
  <main>
    <div class="container__cover div__offset">
      <div class="cover">
        <section class="text__cover">
          <h1>Alimentos</h1>
          <p>El maíz es una planta originaria de América que ha sido cultivada desde hace miles de años. En Guatemala,
            el maíz ha sido un cultivo fundamental desde tiempos prehispánicos y sigue siendo un alimento básico en la
            dieta de la población.
          </p>
          <p>
            La historia del maíz en Guatemala se remonta a los antiguos mayas, quienes cultivaban diferentes variedades
            de maíz en sus tierras. El maíz era considerado una planta sagrada y se utilizaba en ceremonias religiosas,
            así como en la elaboración de alimentos. Los mayas también desarrollaron técnicas de cultivo sofisticadas,
            como la rotación de cultivos y la construcción de terrazas para evitar la erosión del suelo.
          </p>
          <p>
            El maíz es un alimento muy versátil y nutritivo que ha sido parte fundamental de la dieta de muchas culturas
            desde hace miles de años. El maíz es rico en carbohidratos complejos, fibra, vitaminas B y C, y minerales
            como el hierro y el magnesio. Además, el maíz es una buena fuente de proteínas vegetales, lo que lo hace una
            opción importante para personas que siguen una dieta vegetariana o vegana.
          </p>
          <p>
            En América Latina, el maíz es utilizado para preparar una gran variedad de platillos y alimentos, como
            tortillas, tamales, atoles, chuchitos, entre otros. Muchas de estas comidas se consideran platillos
            tradicionales y son muy populares en la región.
          </p>
          <p>
            El maíz también se utiliza para producir otros alimentos como cereales, harina de maíz, palomitas de maíz,
            aceite de maíz, entre otros. Además, el maíz es utilizado en la alimentación animal para la producción de
            carne, leche y huevos.
          </p>
          <p>
            En resumen, el maíz es un alimento nutritivo, versátil y parte fundamental de la dieta de muchas culturas en
            América Latina.
          </p>
        </section>
      </div>
      <div class="principales_aliments">
        <div class="variety-info">
          <div class="variety-description">
            <h3>Atol</h3>
          </div>
          <div class="variety-image">
            <img class="comida__img" src="<?php echo constant('URL'); ?>assets/images/alimentos/Atol.png" alt="">
          </div>
        </div>
        <div class="variety-info">
          <div class="variety-description">
            <h3>Chuchitos</h3>
          </div>
          <div class="variety-image">
            <img class="comida__img" src="<?php echo constant('URL'); ?>assets/images/alimentos/Chuchitos.png" alt="">
          </div>
        </div>
        <div class="variety-info">
          <div class="variety-description">
            <h3>Tortillas</h3>
          </div>
          <div class="variety-image">
            <img class="comida__img" src="<?php echo constant('URL'); ?>assets/images/alimentos/Tortillas.png" alt="">
          </div>
        </div>
        <div class="variety-info">
          <div class="variety-description">
            <h3>Tamal</h3>
          </div>
          <div class="variety-image">
            <img class="comida__img" src="<?php echo constant('URL'); ?>assets/images/alimentos/Tamal.png" alt="">
          </div>
        </div>
      </div>
      <div class="contenedor_recetas">
        <section class="text__cover1">

        <div><?php echo $this->mensaje; ?></div> 
        <h1 class="center">Sección de Nuevo</h1>

          <form action="<?php echo constant('URL'); ?>alimentos/crear" method="POST" class="formulario_recetas">
            <h2>Ingrese sus recetas</h2>
            <div class="campo">
              <label for="autor">Ingrse su nombre: </label>
              <input type="text" id="autor_receta" name="autor_receta" placeholder="Ej. Juan Perez">
            </div>
            <div class="campo">
              <label for="name_receta">Nombre de la receta:</label>
              <input type="text" id="nombre_receta" name="nombre_receta" placeholder="Ej. Ensalada de frutas">
            </div>
            <div class="campo">
              <label for="color_maiz">Ingredientes:</label>
              <input type="text" id="ingredientes" name="ingredientes" placeholder="Ej. Amarillo">
            </div>
            <div class="campo">
              <label for="descripcion">Instrucciones:</label>
              <textarea id="descripcion" name="instrucciones"
                placeholder="Ej. Una ensalada fresca y saludable..."></textarea>
            </div>
            <button type="submit" class="btn__text-cover btn__text">Guardar</button>
          </form>
        </section>
      </div>
      <div class="tabla_de_recetas">
        <table style="border-collapse: collapse; width: 100%; max-width: 800px; margin: auto;">
          <tr>
            <th style="background-color: #F0F8FF; border: 1px solid #ddd; padding: 8px;">Autor receta1</th>
            <th style="background-color: #F0F8FF; border: 1px solid #ddd; padding: 8px;">Nombre de la receta</th>
            <th style="background-color: #F0F8FF; border: 1px solid #ddd; padding: 8px;">Ingredientes</th>
            <th style="background-color: #F0F8FF; border: 1px solid #ddd; padding: 8px;">Instrucciones</th>
          </tr>
          <?php
                include_once 'models/receta.php';
                foreach ($this->recetas as $row) {
                    $receta = new Receta();
                    $receta = $row;
                    ?>
                    <tr id="fila-<?php echo $receta->autor; ?>">
                        <td style='border: 1px solid #ddd; padding: 8px;'>
                            <?php echo $receta->autor; ?>
                        </td >
                        <td style='border: 1px solid #ddd; padding: 8px;'>
                            <?php echo $receta->receta; ?>
                        </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>
                            <?php echo $receta->ingredientes; ?>
                        </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>
                            <?php echo $receta->instrucciones; ?>
                        </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'><a
                                href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Actualizar</a>
                        </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'><button class="bEliminar" data-matricula="<?php echo $alumno->matricula; ?>">Eliminar</button>
                        </td>
                    </tr>
                <?php } ?>
          
          
        </table>


      </div>


    </div>
  </main>
</body>

</html>
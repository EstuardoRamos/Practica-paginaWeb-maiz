<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variedades
  </title>

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
          <h1>Variedades deL maiz </h1>
          <p>El maíz es una planta extremadamente versátil que tiene cientos de variedades diferentes. Las
            variedades de maíz se pueden clasificar en función de su tamaño, forma, color y sabor. Aunque
            hay
            mas de 150 variedades criollas, hay tres principales que debes conocer:
          </p>
          <br>
          <br>

          <div class="variety">
            
            <div class="variety-info">
              <div class="variety-description">
                <h3>Maíz amarillo</h3>
                <p>El maíz amarillo es una de las variedades más comunes en Guatemala. Es utilizado para la elaboración
                  de tortillas, tamales, atoles y otros platillos típicos de la gastronomía guatemalteca.</p>
              </div>
              <section>
                <div class="variety-image">
                  <img src="<?php echo constant('URL'); ?>assets/images/Maiz/maiz-amarillo.png" alt="Maíz amarillo">
                </div>
              </section>
              
            </div>
          </div>


          <br>
          <br>
          <div class="variety">
            
            <div class="variety-info">
              <div class="variety-description">
                <h3>Maíz blanco</h3>
                <p>El maíz blanco es otra de las variedades más populares en Guatemala. A diferencia del maíz amarillo,
                  este tipo de maíz es utilizado principalmente para la elaboración de pozole, un platillo típico de la
                  gastronomía mexicana que también es muy consumido en Guatemala.</p>
              </div>
              <div class="variety-image">
                <img src="<?php echo constant('URL'); ?>assets/images/Maiz/maiz-blanco.png" alt="Maíz blanco">
              </div>
            </div>
          </div>

          <div class="variety">
            <div class="variety-info">
              <div class="variety-description">
                <h3>Maíz Azul</h3>
                <p>El maíz azul es una variedad nativa de México y Centroamérica que ha sido cultivada durante miles de
                  años. Es utilizado para la elaboración de tortillas, tamales y otros platillos típicos de la
                  gastronomía mexicana y guatemalteca.</p>
              </div>
              <div class="variety-image">
                <img src="<?php echo constant('URL'); ?>assets/images/Maiz/maiz-azul.png" alt="Maíz azul">
              </div>
            </div>
          </div>
          <div class="other_types">
            <h4>Otros variedades de Maiz</h4>
            <ul>
              <li>Maíz blanco: Es la variedad de maíz más común en América Latina. Tiene un sabor suave y se
                utiliza para hacer tortillas, tamales, salsas y otros platillos.</li>
              <li>Maíz amarillo: Es otra variedad muy común en América Latina. Tiene un sabor dulce y se
                utiliza en la preparación de alimentos como el choclo, las arepas y el pan de maíz.</li>
              <li>Maíz morado: Es una variedad de maíz originaria de México y América Central. Tiene un sabor
                ligeramente dulce y se utiliza para hacer tortillas y tamales.</li>
              <li>Maíz negro: Es una variedad de maíz que se cultiva principalmente en América del Sur. Tiene
                un sabor ligeramente dulce y se utiliza en la preparación de alimentos como el mote, una
                especie de sopa de maíz.</li>
              <li>Maíz azul: Es una variedad de maíz que se cultiva principalmente en México y América
                Central. Tiene un sabor ligeramente dulce y se utiliza para hacer tortillas y tamales.</li>
              <li>Maíz dulce: Es una variedad de maíz que se cultiva principalmente para el consumo humano y
                no para la alimentación animal. Tiene un sabor muy dulce y se utiliza en la preparación de
                alimentos como el elote y las papillas.</li>
              <li>Maíz palomero: Es una variedad de maíz que se utiliza para hacer palomitas de maíz. Tiene
                una textura crujiente y un sabor ligero.</li>
              <li>Maíz ceroso: Es una variedad de maíz que tiene un alto contenido de almidón y es muy
                utilizado en la producción de alimentos procesados como la harina de maíz.</li>
            </ul>
          </div>
          <div class="contenedor_recetas">
            <section class="text__cover1">
            <form action="<?php echo constant('URL'); ?>variedades/crear" method="POST" class="formulario_recetas">
              <h2>¿Cual es tu maiz favorito?</h2>
              <div class="campo">
                <label for="autor">Ingrese su nombre: </label>
                <input type="text" id="usuario" name="usuario" placeholder="Ej. Juan Perez">
              </div>
              <div class="campo">
                <label for="name_receta">Seleccione su maiz maiz favorito:</label>
                <div class="campo">
                  <label for="color_favorito">Color de maíz favorito:</label>
                  <select id="color_favorito" name="color_favorito">
                    <option value="azul">Azul</option>
                    <option value="blanco">Blanco</option>
                    <option value="amarillo">Amarillo</option>
                  </select>
                </div> 
              </div>
              <button type="submit" class="btn__text-cover btn__text">Guardar</button>
            </form>
            </section>
          </div>
          <div class="tabla_de_recetas">
            <h3>Ranking color con mas fans</h3>
            <table style="border-collapse: collapse; width: 100%; max-width: 800px; margin: auto;">
              <tr>
                <th style="background-color: #F0F8FF; border: 1px solid #ddd; padding: 8px;">Color </th>
                <th style="background-color: #F0F8FF; border: 1px solid #ddd; padding: 8px;">Cantidad</th>
              </tr>
              <?php
              include 'controler/mostrar_fav.php';
              while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["color_favorito"] . "</td>";
                echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $fila["cantidad"] . "</td>";
                echo "</tr>";
              }
              ?>
            </table>
    
    
          </div>
          

      </div>
    </div>

  </main>

</body>

</html>
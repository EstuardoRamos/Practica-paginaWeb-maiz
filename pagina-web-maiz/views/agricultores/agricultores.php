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
          <h1>Mayas Agricultores</h1>
          <p>Puedes formar parte de nuestra comunidad de mayas agricultores, solodebes de registrate y podras tenr
            acceso a recetas aportads por
            nuestra comunidad
          </p>
        </section>
      </div>

      <div class="contenedor_recetas">
        <section class="text__cover1">

          <div>
            <?php echo $this->mensaje; ?>
          </div>
          <h1 class="center">Registrate</h1>

          <form action="<?php echo constant('URL'); ?>alimentos/crear" method="POST" class="formulario_recetas">
            <h2>Ingrese sus datos</h2>
            <div class="campo">
              <label for="autor">Ingrse su nombre: </label>
              <input type="text" id="autor_receta" name="autor_receta" placeholder="Ej. Juan Perez">
            </div>
            <div class="campo">
              <label for="name_receta">Correo electronico:</label>
              <input type="text" id="nombre_receta" name="nombre_receta" placeholder="Ej. Ensalada de frutas">
            </div>
            <div class="campo">
              <label for="color_maiz">Contraseña</label>
              <input type="text" id="ingredientes" name="ingredientes" placeholder="Ej. Amarillo">
            </div>
            <div class="campo">
              <label for="descripcion">Confirme contraseña:</label>
              <textarea id="descripcion" name="instrucciones"
                placeholder="Ej. Una ensalada fresca y saludable..."></textarea>
            </div>
            <button type="submit" class="btn__text-cover btn__text">Registrate</button>
          </form>
        </section>
      </div>
    </div>
  </main>
</body>

</html>
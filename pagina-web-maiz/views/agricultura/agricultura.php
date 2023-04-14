<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Modern - MagtimusPro</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="import" href="header.html">
</head>

<body>
    <!-- Incluir archivo de encabezado -->
    <!--Header - Menu-->
    <div id="contenido">
    </div>

    <script src="js/calcularCosecha.js"></script>
    <?php require 'views/header.php'; ?>

    <main>

        <!--INICIO-->
        <!--Portada de inicio-->

        <div class="container__cover div__offset">
            <form>
                <label for="fecha-siembra">Fecha de siembra (YYYY-MM-DD):</label>
                <input type="text" id="fecha-siembra" name="fecha-siembra">
                <button type="button" onclick="calcularFechaCosecha()">Calcular fecha de cosecha</button>
            </form>

            <p id="resultado"></p>


        </div>

    </main>

</body>

</html>
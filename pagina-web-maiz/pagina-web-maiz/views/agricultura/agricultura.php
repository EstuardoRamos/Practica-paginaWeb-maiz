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
    <div id="contenido">
    </div>

    <script src="js/calcularCosecha.js"></script>
    <?php require 'views/header.php'; ?>

    <main>


        <div class="container__cover div__offset">
            <div class="cover">
                <section class="text__cover">
                    <h1>Cultivo de Maiz</h1>
                    <p>El maíz es un pilar fuerte en la dieta alimenticia de la población y contribuye, en gran
                        medida, en la seguridad alimentaria de familias de escasos recursos del área rural. Una
                        forma peculiar en que se consume el maíz es en tortilla, la cual es elaborada a partir
                        del grano entero de este cereal. El consumo promedio per cápita por año es de 110
                        kg y puede llegar a duplicar su valor, cuando el ingreso económico familiar es muy
                        bajo. Además, es un símbolo cultural que permanece arraigado en las costumbres
                        guatemaltecas y que persisten en la actualidad .
                    <p>
                        A pesar de todo, el maíz aún es considerado un cultivo de poca relevancia debido a que,
                        en términos monetarios, no aporta mucho a la economía campesina y su importancia
                        es más social que económica. A pesar de esta apreciación, este cultivo ocupa la mayor
                        superficie de siembra a nivel nacional, la Organización de las Naciones Unidas para
                        la Alimentación (FAO), estimó para el 2019 un 35,41% de área con potencial de uso
                        agrícola del país, de esta superficie, el maíz ocupa el 22,5%, la mayor comparada con
                        otros cultivos [5, 2]. La amplia distribución a nivel nacional es suficiente para brindarle
                        especial importancia por el papel que juega en las familias guatemaltecas.


                    </p>
                </section>
                <section class="image__cover">
                    <img src="assets/images/Maiz/grafica_cultivo.jpg" alt="">
                </section>
            </div>
            <div class="cover">
                <section class="text__cover">
                    <h1>¿Como Sembrar un maíz?</h1>
                    <h2>Paso 1</h2>
                    Lo más aconsejable es que te hagas con semilla de maíz dulce o tierno, ya que recogerás cosechas para poder comerla y para poder acompañar tus platos. Infórmate bien de los tipos de maíces y planta el más conveniente.
                    </p>
                    <h2>Paso 2</h2>
                    Recuerda que el maíz requiere mucho sol, por eso es aconsejable sembrar entre mayo y junio. Siempre que haga ya calor, no necesita protección bajo el sol, ya que si la tierra se enfría, el maíz se pudrirá. Intenta que le dé mucho sol, constantemente, para su crecimiento y desarrollo.
                    </p>
                    <h2>Paso 3</h2>
                    El terreno para la siembra del maíz debe estar muy abonado, además de seco. Antes de plantar añade durante unas 4 semanas antes abono a la tierra.
                    </p>
                    <h2>Paso 4</h2>
                    El maíz se poliniza con el viento, por eso es mejor plantarlo en grupo que en hilera. Esto ayudará a la germinación del polen. Planta las semillas a 1-2 pulgadas de la superficie del terreno, muy aconsejable que plantes 2-3 semillas por agujero.
                    </p>
                    <h2>Paso 5</h2>
                    Aunque es necesario que la tierra permanezca lo más seca posible, hay que regar las plantas al menos una vez a la semana. Es aconsejable instalar algún sistema de riego en la tierra, ya que si se riegan desde arriba, se podría eliminar el polen de la planta.
                    </p>
                    <h2>Paso 6</h2>
                    
                    En el mes de julio, es decir, aproximadamente a los 3 meses de la siembra, el maíz debe de tener una altura considerable de 12-18 pulgadas. Una vez desarrollada la borla seca, el maíz deja de crecer.
                    </p>
                    <h2>Paso 7</h2>
                    Cuando notes los granos de maíz bien apretados y al pincharlos suelte un líquido lechoso, el maíz estará listo para ser recogido. Lo aconsejable es comerlo tras recogerlo, de manera que mejor que plantes muchos.
                    
                    </p>
                </section>
                <section class="image__cover">
                    <img src="assets/images/Maiz/ciclo-maiz.jpg" alt="">
                </section>
            </div>
            <div class="cover">
                <section class="text__cover">
                <h1>Calcula en cuanto tiempo puedes cosechar tu maíz</h1>
            <form>
                <label for="fecha-siembra">Fecha de siembra (YYYY-MM-DD):</label>
                <input type="text" id="fecha-siembra" name="fecha-siembra">
                <button class="btn__text-cover btn__text" type="button" onclick="calcularFechaCosecha()">Calcular fecha
                    de cosecha</button>
            </form>

            <p id="resultado"></p>
            </section>
            </div>

        </div>

    </main>

</body>

</html>
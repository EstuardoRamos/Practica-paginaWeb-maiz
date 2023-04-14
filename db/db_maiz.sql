CREATE DATABASE maiz;


CREATE TABLE recetas (
  id INT NOT NULL AUTO_INCREMENT,
  autor_receta VARCHAR(255) NOT NULL,
  nombre_receta VARCHAR(255) NOT NULL,
  ingredientes TEXT NOT NULL,
  instrucciones TEXT NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE maiz_favorito (
  id INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(255) NOT NULL,
  color_favorito VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE cuentos_maiz (
  id INT NOT NULL AUTO_INCREMENT,
  autor VARCHAR(255) NOT NULL,
  titulo VARCHAR(255) NOT NULL,
  historia TEXT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO `recetas` (`id`, `autor_receta`, `nombre_receta`, `ingredientes`, `instrucciones`) VALUES (NULL, 'Estuardo Ramos', 'Palomitas de maíz dulces', '1 cucharada de aceite de oliva\r\n60 g de granos de maíz para hacer palomitas\r\n100 g de azúcar blanquilla\r\n50 ml de agua', 'Lo primero que vamos a hacer es preparar las palomitas. Para ello, echamos 1 cucharada de aceite de oliva en una sartén y cuando esté caliente incorporamos 60 g de maíz para hacer palomitas.\r\nDejamos la sartén a fuego medio y removemos bien para que los granos de maíz se impregnen bien con el aceite. Tapamos la sartén para evitar que el maíz al explotar salga volando. Transcurridos un par de minutos los granos de maíz comenzarán a estallar convirtiéndose en palomitas.\r\n\r\nUna vez tengamos las palomitas de maíz hechas, las reservamos en la misma sartén. Si algún grano de maíz no ha explotado o ha quedado entreabierto, no pasa nada, lo desechamo\r\nPara el caramelo: derrite el azúcar con el agua a fuego medio-alto y remueve de forma constante\r\nBaja a fuego medio cuando el almíbar comience a burbujear y remueve de vez en cuando hasta que se torne de color dorado\r\nIncorpora el caramelo a las palomitas e integra ambas elaboraciones\r\nExtiende las palomitas sobre papel de horno o un tapete de silicona y espera a que enfríen. Separa las que se hayan pegado y sirve las palomitas de maíz dulces en varios recipientes');

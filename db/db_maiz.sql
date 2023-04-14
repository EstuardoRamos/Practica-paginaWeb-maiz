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


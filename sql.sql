CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;
CREATE TABLE libros (
	id int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL,
	autor varchar(50) NOT NULL,
	anio_edicion varchar(50) NOT NULL,
	PRIMARY KEY (id)
);

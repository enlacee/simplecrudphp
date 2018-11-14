<?php
require_once 'Db.php';

/**
 * Libro Table
 */
class LibroTable
{
	public function __constructor()
	{

	}

	public function insertar($libro)
	{
		$db = Db::conectar();
		$insert = $db->prepare( 'INSERT INTO libros values(NULL, :nombre, :autor, :anio_edicion)' );
		$insert->bindValue('nombre', $libro->getNombre());
		$insert->bindValue('autor', $libro->getAutor());
		$insert->bindValue('anio_edicion', $libro->getAnioEdicion());
		$insert->execute();
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaLibros = [];
		$select = $db->query('SELECT * FROM libros');

		foreach ($select->fetchAll() as $libro) {
			$myLibro = new LibroModel();
			$myLibro->setId($libro['id']);
			$myLibro->setNombre($libro['nombre']);
			$myLibro->setAutor($libro['autor']);
			$myLibro->setAnioEdicion($libro['anio_edicion']);
			$listaLibros[] = $myLibro;
		}

		return $listaLibros;
	}

	public function eliminar( $id )
	{
		$db = Db::conectar();
		$eliminar = $db->prepare( 'DELETE FROM libros WHERE id=:id' );
		$eliminar->bindValue( 'id', $id );
		$eliminar->execute();
	}

	public function obtenerLibro( $id )
	{
		$db = Db::conectar();
		$select = $db->prepare( 'SELECT * FROM libros WHERE ID=:id' );
		$select->bindValue( 'id', $id );
		$select->execute();
		$libro = $select->fetch();
		
		$myLibro = new LibroModel();
		$myLibro->setId( $libro['id'] );
		$myLibro->setNombre( $libro['nombre'] );
		$myLibro->setAutor( $libro['autor'] );
		$myLibro->setAnioEdicion( $libro['anio_edicion'] );
		
		return $myLibro;
	}

	// método para actualizar un libro, recibe como parámetro el libro
	public function actualizar( $libro )
	{
		$db = Db::conectar();
		$actualizar = $db->prepare( 'UPDATE libros SET nombre=:nombre, autor=:autor,anio_edicion=:anio  WHERE id=:id' );
		$actualizar->bindValue( 'id', $libro->getId() );
		$actualizar->bindValue( 'nombre', $libro->getNombre() );
		$actualizar->bindValue( 'autor', $libro->getAutor() );
		$actualizar->bindValue( 'anio', $libro->getAnioEdicion() );
		$actualizar->execute();
	}

}
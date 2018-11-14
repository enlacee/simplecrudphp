<?php

/**
 * Libro Model
 */
class LibroModel
{
	private $id;
	private $nombre;
	private $autor;
	private $anio_edicion;

	public function __construct()
	{
		# code...
	}

	// GET
	public function getId()
	{
		return $this->id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getAutor()
	{
		return $this->autor;
	}

	public function getAnioEdicion()
	{
		return $this->anio_edicion;
	}

	// SET
	public function setId( $id )
	{
		$this->id = $id;
	}

	public function setNombre( $nombre )
	{
		$this->nombre = $nombre;
	}

	public function setAutor( $autor )
	{
		$this->autor = $autor;
	}

	public function setAnioEdicion( $anioEdicion )
	{
		$this->anio_edicion = $anioEdicion;
	}

}
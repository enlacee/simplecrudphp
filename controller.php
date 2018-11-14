<?php

require_once 'libroTable.php';
require_once 'libroModel.php';

$crud = new libroTable();
$libro = new libroModel();


if ( isset( $_POST['op'] ) === true && $_POST['op'] === 'insertar' ) {
	$libro->setNombre( $_POST['nombre'] );
	$libro->setAutor( $_POST['autor'] );
	$libro->setAnioEdicion( $_POST['anio_edicion'] );
	$crud->insertar( $libro );

	// redirect
	header( 'location: index.php' );
} elseif ( isset( $_POST['op'] ) === true && $_POST['op'] === 'actualizar' ) {
	$libro->setId( $_POST['id'] );
	$libro->setNombre( $_POST['nombre'] );
	$libro->setAutor( $_POST['autor'] );
	$libro->setAnioEdicion( $_POST['anio_edicion'] );
	$crud->actualizar( $libro );

	// redirect
	header( 'location: index.php' );
} elseif ( isset( $_GET['action'] ) === true && $_GET['action'] == 'e' ) {
	$crud->eliminar( $_GET['id'] );

	// redirect
	header( 'location: index.php' );
} elseif ( isset( $_GET['action'] ) === true && $_GET['action'] == 'a' ) {
	
	// redirect
	header( 'location: actualizar.php' );
}



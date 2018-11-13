<?php

require_once 'libroTable.php';
require_once 'libroModel.php';

$crud = new libroModel();
$libro = new libroTable();

if ( isset( $_POST['op'] ) === true ) {

	if ( $_POST['op'] === 'insertar' ) {
		$libro->setNombre( $_POST['nombre'] );
		$libro->setAutor( $_POST['autor'] );
		$libro->setAnioEdicion( $_POST['anio_edicion'] );
		$crud->insertar( $libro );

		// redirect
		header( 'location: index.php' );
	} elseif ( $_POST['op'] === 'actualizar' ) {

	}

}


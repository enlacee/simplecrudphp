<?php

require_once 'LibroTable.php';
require_once 'LibroModel.php';

$crud = new LibroTable();
$libro = new LibroModel();

$libro = $crud->obtenerLibro( $_GET['id'] );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Libro</title>
</head>
<body>

	<form action="controller.php" method="POST">
		<table>
			<tr>
				<input type="hidden" name="id" value="<?php echo $libro->getId(); ?>">
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $libro->getNombre(); ?>"></td>
			</tr>
			<tr>
				<td>Autor</td>
				<td><input type="text" name="autor" value="<?php echo $libro->getAutor(); ?>"></td>
			</tr>
			<tr>
				<td>Fecha de Edicion</td>
				<td><input type="text" name="anio_edicion" value="<?php echo $libro->getAnioEdicion()?>"></td>
			</tr>
			<input type="hidden" name="op" value="actualizar">

		</table>
		<input type="submit" name="Guardar">
		<a href="index.php">Volver</a>
	</form>

</body>
</html>
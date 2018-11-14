<?php

// include la clase libro y CrudLibro

require_once 'LibroTable.php';
require_once 'LibroModel.php';

$crud = new LibroTable();
$libro = new LibroModel();

$listaLibros = $crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Libros</title>
</head>
<body>

	<table border="1">
		<head>
			<td>Id</td>
			<td>Nombre</td>
			<td>Autor</td>
			<td>Opciones</td>
		</head>
		<body>
			<?php foreach ( $listaLibros as $libro ): ?>
			<tr>
				<td><?php echo $libro->getNombre(); ?></td>
				<td><?php echo $libro->getAutor(); ?></td>
				<td><?php echo $libro->getAnioEdicion(); ?></td>
				<td>
					<a href="actualizar.php?id=<?php echo $libro->getId(); ?>&action=a">Editar</a>
					<a href="controller.php?id=<?php echo $libro->getId(); ?>&action=e">Eliminar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</body>
	</table>

</body>
</html>
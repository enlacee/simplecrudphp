<!DOCTYPE html>
<html>
<head>
	<title>Agregar Libro</title>
</head>
<body>

	<form action="controller.php" method="POST">
		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Autor:</td>
				<td><input type="text" name="autor"></td>
			</tr>
			<tr>
				<td>Fecha Edición</td>
				<td><input type="text" name="anio_edicion"></td>
			</tr>
		</table>
		<input type="hidden" name="op" value="insertar">
		<input type="submit" value="Guardar">
		<a href="index.php">Volver</a>
	</form>
</body>
</html>
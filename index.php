<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario PHP</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Formulario PHP</h1>
	<form method="POST" action="">
		<table>
			<!--Nombre-->
			<tr>
				<td>
					Nombre
				</td>
				<td>
					<input type="name" name="Nombre"></input>
				</td>
			</tr>
			<!--Apellido-->
			<tr>
				<td>
					Apellido
				</td>
				<td>
					<input type="name" name="Apellido"></input>
				</td>
			</tr>
			<!--Correo-->
			<tr>
				<td>
					Correo
				</td>
				<td>
					<input type="name" name="Correo"></input>
				</td>
			</tr>
			<!--Telefono-->
			<tr>
				<td>
					Telefono
				</td>
				<td>
					<input type="name" name="Telefono"></input>
				</td>
			</tr>
			<!--Mensaje-->
			<tr>
				<td>
					Mensaje
				</td>
				<td>
					<input type="name" name="Mensaje"></input>
				</td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Registrar"/><input type="reset"/>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			require ("registro.php");
		}
	?>
</body>
</html>
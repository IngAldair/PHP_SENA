<?php
	$Nombre   = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Correo   = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
	$Mensaje  = $_POST['Mensaje'];

	$reqlen = strlen($Nombre)*strlen($Apellido)*strlen($Correo)*strlen($Telefono);
	if ($reqlen > 0) {
		require("connet_db.php");
		mysql_query("INSERT INTO registro VALUES('','$Nombre','$Apellido','$Correo','$Telefono','$Mensaje')");

		$ms = "Registro Correcto";
		echo $ms;

		mysql_close($link);

	}else{
		$mss = "Llenar Campos";
		echo $mss;
	}
?>
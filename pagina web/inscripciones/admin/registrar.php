<?php 

include("con_db.php");

if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['phone']) >= 1) {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$fechareg = date("d/m/y");
	$consulta = "INSERT INTO personas(nombre, correo, celular, fecha_reg) VALUES ('$name','$email','$phone','$fechareg')";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		header("location: /inscripciones/?msg=Registro completado exitosamente.");
	} else {
		header("location: /inscripciones/?msg=Ha ocurrido un error");
	}
}   else {
	header("location: /inscripciones/?msg=¡Por favor complete los campos!");
}

?>
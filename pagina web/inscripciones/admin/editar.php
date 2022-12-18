<?php 

include("con_db.php");

if (isset($_POST['update'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['phone']) >= 1)  {
	    $iduser = trim($_POST['id']);
		$name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$celular = trim($_POST['phone']);
	    $fechareg = date("d/m/y");
	    $consulta = "UPDATE personas SET Nombre = '$name', Correo = '$email', celular = '$celular' WHERE id = '$iduser'";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Usuario editado!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
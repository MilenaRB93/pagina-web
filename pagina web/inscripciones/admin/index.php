<?php include("con_db.php"); ?>

<!DOCTYPE html>
<html>
<head><title>lista de usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
	<body>
		<h1>Lista de usuarios</h1>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<a href="registro.php" class="boton_new">Registrar usuario</a>
		<table>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>correo</th>
				<th>celular</th>
				<th>fecharegistro</th>
				<th>acciones</th>
			</tr>
				<?php 
				$query = mysqli_query ($conex, "SELECT * FROM personas");

				$result= mysqli_num_rows($query);
				if ($result > 0){
					while ($data = mysqli_fetch_array($query)){
			?>
				<td><?php echo $data["id"]?></td>
				<td><?php echo $data["Nombre"]?></td></td>
				<td><?php echo $data["Correo"]?></td></td>
				<td><?php echo $data["celular"]?></td></td>
				<td><?php echo $data["fecha_reg"]?></td></td>
				<td>
				<a class="link_edit" href="edicion.php?id=<?php echo $data["id"]?>">editar</a>
				|
				<a class="link_delete" href="eliminar.php?id=<?php echo $data["id"]?>">eliminar</a>
				</td>
				</tr>
				<?php
			}
		}
		?>
	<tr>
			
		</table>
</body>
</html>
<?php 
include("editar.php");
       
//if(!empty($_POST)){
    //
//}
 
if (empty($_GET['id'])){
    header('location: index.php');
}
$iduser = $_GET['id'];
$sql = mysqli_query($conex, "SELECT Nombre, Correo, celular FROM `personas` WHERE id=$iduser");

$resul_sql = mysqli_num_rows($sql);
if($resul_sql == 0){
    header('location: index.php');
}else{
    while($data = mysqli_fetch_array($sql)){
        $nombre = $data["Nombre"];
        $email = $data["Correo"];
        $celular = $data["celular"];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edicion de usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Edicion de usuario</h1>
        <input type="hidden" name="id" value="<?php echo $iduser;?>">
    	<input type="text" name="name" placeholder="Nombre completo" value="<?php echo $nombre;?>">
    	<input type="email" name="email" placeholder="Email" value="<?php echo $email;?>">
        <input type="number" name="phone" placeholder="Número celular" value="<?php echo $celular;?>">
    	<input type="submit" name="update">
    </form>
		<li><a href="index.php" class="boton_new">listar registrados</a></li>
</body>
</html>
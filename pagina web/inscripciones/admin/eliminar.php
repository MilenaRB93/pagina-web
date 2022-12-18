<?php

include("con_db.php");

if (!isset($_GET["id"])) {
    header("location: index.php");
}

$iduser = $_GET["id"];

if(!is_numeric($iduser)){
    header("location: index.php");
}

$consulta = "DELETE FROM personas WHERE id = '$iduser'";
$resultado = mysqli_query($conex, $consulta);
if ($resultado) {
    header("location: index.php");
}else{
    die("Hubo un error al intentar eliminar el usuario");
}

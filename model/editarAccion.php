<?php 
require_once('conexion.php');
$idAccion = $_POST['idAccion'];
$mysql = conexion();
$sql = "SELECT Imagen, Texto FROM imagen WHERE idImagen = '$idAccion' ";
$resultado = $mysql->query($sql);
$fila = $resultado->fetch_array();
$img = '../../model/'.$fila[0];
$nom = $fila[1];
echo ($img);
?>
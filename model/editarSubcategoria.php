<?php 
require_once('conexion.php');
$idSubCategoria = $_POST['idSubCate'];
$mysql = conexion();
$sql = "SELECT ruta_imagen, NombreSubCategoria FROM subcategorias WHERE idSubCategoria = '$idSubCategoria' ";
$resultado = $mysql->query($sql);
$fila = $resultado->fetch_array();
$img = '../../model/'.$fila[0];
$nom = $fila[1];
echo ($img);
?>
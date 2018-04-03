<?php 
require_once('conexion.php');
$idCategoria = $_POST['idCate'];
$mysql = conexion();
$sql = "SELECT ruta_imagen, NombreCategoria FROM categoria WHERE idCategoria = '$idCategoria' ";
$resultado = $mysql->query($sql);
$fila = $resultado->fetch_array();
$img = '../../model/'.$fila[0];
$nom = $fila[1];

echo ($img);



?>
<?php 
require_once('conexion.php');
$idAccion = $_POST['idAccion'];
$mysql = conexion();
$sql = "SELECT Imagen FROM imagen WHERE IdImagen = '$idAccion' ";
$resultado = $mysql->query($sql);
$img = $resultado->fetch_array();
$imagen = $img[0];
$eliminarImagen = $imagen;
if ($eliminarImagen){
	$sql1 = "DELETE FROM imagen WHERE IdImagen = '$idAccion'";
	if ($resp = $mysql->query($sql1)) {
		unlink($eliminarImagen);
		echo '1'; //Categoria Eliminada
	} else {
		echo $eliminarImagen; //Ocurrio un problema al eliminar la imagen
	}
} else {
	echo '3'; //Ocurrio un problema al eliminar la categoria
	
}
?>
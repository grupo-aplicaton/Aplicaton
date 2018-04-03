<?php 
require_once('conexion.php');
$idCategoria = $_POST['idCate'];
$mysql = conexion();
$sql = "SELECT ruta_imagen FROM categoria WHERE idCategoria = '$idCategoria' ";
$resultado = $mysql->query($sql);
$img = $resultado->fetch_array();
$imagen = $img[0];
$eliminarImagen = $imagen;
if ($eliminarImagen){
	$sql1 = "DELETE FROM categoria WHERE idCategoria = $idCategoria";
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
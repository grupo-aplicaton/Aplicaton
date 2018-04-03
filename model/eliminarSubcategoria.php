<?php 
require_once('conexion.php');
$idSubCategoria = $_POST['idSubCate'];
$mysql = conexion();
$sql = "SELECT ruta_imagen FROM subcategorias WHERE idSubCategoria = '$idSubCategoria' ";
$resultado = $mysql->query($sql);
$img = $resultado->fetch_array();
$imagen = $img[0];
$eliminarImagen = $imagen;
if ($eliminarImagen){
	$sql1 = "DELETE FROM subcategorias WHERE Categoria_idCategoria = '$idSubCategoria'";
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
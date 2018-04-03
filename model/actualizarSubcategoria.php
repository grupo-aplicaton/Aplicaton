<?php 
session_start();
require_once('conexion.php');
$nombre = $_POST['nomSub'];
$imagen = $_FILES['file'];
$idSubCate = $_POST['subcategoria'];
$mysql = conexion();
$sql1 = "SELECT ruta_imagen, idSubCategoria FROM subcategorias WHERE idSubCategoria = '$idSubCate'";
$res = $mysql->query($sql1);
$fila = $res->fetch_array();
$ima = $fila[0];
$eliminarImagen = $ima;
if ($imagen["type"] == "image/jpeg" OR $imagen["type"] == "image/jpg" OR $imagen["type"] == "image/png") {
	$ruta = "img/".md5($imagen["tmp_name"]).".jpg";
    unlink($eliminarImagen);
	if (move_uploaded_file($imagen["tmp_name"], $ruta)){
	    $sql = "UPDATE subcategorias SET NombreSubCategoria = '$nombre', ruta_imagen = '$ruta' WHERE idSubCategoria = '$idSubCate'";
	    $resultado = $mysql->query($sql);
	    if ($resultado) {
	       	echo "1"; //Se Actualizo la Categoria con Exito
	    } else {
	       	echo "2"; //Ocurrio un Error al Actualizar la Categoria
	    }
    } else {
	    echo "2";
    }
} else if ($imagen["type"] == "") {
	$sql = "UPDATE subcategorias SET NombreSubCategoria = '$nombre' WHERE idSubCategoria = '$idSubCate'";
	$resultado = $mysql->query($sql);
	if ($resultado) {
	    	echo "1"; //Se Actualizo la Categoria con Exito
	}
} else if ($imagen["type"] != "image/jpeg" OR $imagen["type"] != "image/jpg" OR $imagen["type"] != "image/png"){
	echo "4"; //Debe Seleccionar una imagen de tipo JPG o PNG	
}



?>
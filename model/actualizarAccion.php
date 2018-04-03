<?php 
session_start();
require_once('conexion.php');
$nombre = $_POST['nomAcc'];
$imagen = $_FILES['file'];
$idAccion = $_POST['accion'];
$mysql = conexion();
$sql1 = "SELECT Imagen, idImagen FROM imagen WHERE IdImagen = '$idAccion'";
$res = $mysql->query($sql1);
$fila = $res->fetch_array();
$ima = $fila[0];
$eliminarImagen = $ima;
if ($imagen["type"] == "image/jpeg" OR $imagen["type"] == "image/jpg" OR $imagen["type"] == "image/png") {
	$ruta = "img/".md5($imagen["tmp_name"]).".jpg";
    unlink($eliminarImagen);
	if (move_uploaded_file($imagen["tmp_name"], $ruta)){
	    $sql = "UPDATE imagen SET Texto = '$nombre', Imagen = '$ruta' WHERE idImagen = '$idAccion'";
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
	$sql = "UPDATE imagen SET Texto = '$nombre' WHERE idImagen = '$idAccion'";
	$resultado = $mysql->query($sql);
	if ($resultado) {
	    	echo "1"; //Se Actualizo la Categoria con Exito
	}
} else if ($imagen["type"] != "image/jpeg" OR $imagen["type"] != "image/jpg" OR $imagen["type"] != "image/png"){
	echo "4"; //Debe Seleccionar una imagen de tipo JPG o PNG	
}



?>
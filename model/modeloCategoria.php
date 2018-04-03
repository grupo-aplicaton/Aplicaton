<?php
session_start();
require_once('conexion.php');
$nombre = $_POST['nomCat'];
$imagen = $_FILES['file'];
$user = $_SESSION['iduser'];
if ($imagen["type"] == "image/jpeg" OR $imagen["type"] == "image/jpg" OR $imagen["type"] == "image/png" ) {
	$ruta = "img/".md5($imagen["tmp_name"]).".jpg";
	if ($imagen["size"] > 200000) {
		echo "5"; //La imagen es muy grande
	} else {
		if (move_uploaded_file($imagen["tmp_name"], $ruta)) {
			$mysql = conexion();
			$sql = "INSERT INTO categoria (NombreCategoria, ruta_imagen, idUsuario) VALUES ('$nombre', '$ruta', '$user')";
			$resultado = $mysql->query($sql);
			if ($resultado) {
				echo "1"; //Se Guardo la Categoria con Exito
			} else {
				echo "2"; //Ocurrio un Error al Guardar la Categoria
			}
		} else {
			echo "3"; //No se pudo Guardar la Imagen
		}
	}
} else {
	echo "4"; //Debe Seleccionar una imagen de tipo JPG o PNG
}
?>

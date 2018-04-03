<?php 
session_start();
require_once('conexion.php');
 $nombre = $_POST['nomSub'];
 $imagen = $_FILES['file'];
 $subCate = $_POST['categoria'];
if ($imagen["type"] == "image/jpeg" OR $imagen["type"] == "image/jpg" OR $imagen["type"] == "image/png" ) {
	$ruta = "img/".md5($imagen["tmp_name"]).".jpg";
	if ($imagen["size"] > 200000) {
		echo "5"; //La imagen es muy grande
	} else {
		if (move_uploaded_file($imagen["tmp_name"], $ruta)) {
			if ($subCate == 0) {
				echo "6"; // Debe seleccionar una categoria
			} else {
				$mysql = conexion();
				$sql = "INSERT INTO subcategorias (NombreSubCategoria, ruta_imagen, Categoria_idCategoria) VALUES ('$nombre', '$ruta', '$subCate')";
				$resultado = $mysql->query($sql);
				if ($resultado) {
					echo "1"; //Se Guardo la Categoria con Exito
				} else {
					echo "2"; //Ocurrio un Error al Guardar la Categoria
				}
			}
		} else {
			echo "3"; //No se pudo Guardar la Imagen
		}
	}
} else {
	echo "4"; //Debe Seleccionar una imagen de tipo JPG o PNG
}
?>
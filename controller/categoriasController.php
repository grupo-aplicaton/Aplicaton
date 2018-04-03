<?php 
require "../view/user/vistas.php";
require "../model/modeloCategoria.php";

$tipoOperacion = $_POST['tipoOperacion'];

function ejecutarOperacion($tipo) {
  // Categorias
  if ($tipo == "insertarCategorias") {
    insertarCategoria($_POST['nomCategoria'], $_POST['nomTitulo']);
  } else if($tipo == "editarCategoria"){
    editarCategoria($_POST['idCategoria']);
  } else if ($tipo == "actualizarCategoria") {
    actualizarCategoria($_POST['idCategoria'], $_POST['nomCategoria']);
  } else if ($tipo == "eliminarCategoria") {
    eliminarCategoria($_POST['idCategoria']);
  }
  // Noticias
  else if ($tipo == "insertarNoticia") {
    insertarNoticia($_POST['nomCat']);
  } else if ($tipo == "editarNoticia") {
    editarNoticia($_POST['idNoticia']);
  } else if ($tipo=="actualizarNoticia"){
    actualizarNoticia($_POST['idNoticia'], $_POST['nomTitulo'],$_POST['nomCategoria'],$_POST['nomDescripcion'],$_FILES['editarImagen']);
  } else if ($tipo == "eliminarNoticia") {
    eliminarNoticia($_POST['idNoticia']);
  }
}
ejecutarOperacion($tipoOperacion);
?>
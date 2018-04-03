<?php
  include_once('../../model/conexion.php');
  include_once('../../controller/seguridad.php');

function crearCategorias() {
  $mysql = conexion();
  $sql = "SELECT * FROM categoria WHERE idUsuario =\"".$_SESSION['iduser']."\" ";
  $resultado = $mysql->query($sql);
  $select = '<select name="categoria" id="cate" class="form-control" required>';
    $select .= '<option value="" selected="seleted" disabled>Seleccione una Categoria</option>';
    while ($fila = $resultado->fetch_array()) {
      $select .= '<option value="'.$fila[0].'">'.$fila[1].'</option>';  
    }
  $select .= '</select>';
  return printf($select);
}
function crearsubCategorias() {
  $mysql = conexion();
  $sql = "SELECT s.idSubCategoria, s.NombreSubCategoria FROM categoria c, subcategorias s WHERE c.idCategoria = S.Categoria_idCategoria";
  $resultado = $mysql->query($sql);
  $select = '<select name="subcategoria" class="form-control" id="subCate">';
    $select .= "<option value='' selected>Seleccione Subcategoria</option>";
    while ($fila = mysqli_fetch_array($resultado)) {
      $select .= "<option value='".$fila[0]."'>".$fila[1]."</option>";
    }
  $select .= '</select>';
  return printf($select);
}
/////////////////////////////////////////////////////
function crearCategorias1() {
  $mysql = conexion();
  $sql = "SELECT * FROM categoria WHERE idUsuario =\"".$_SESSION['iduser']."\" ";
  $resultado = $mysql->query($sql);
  $select = '<select name="categoria" id="cate" class="form-control">';
    $select .= '<option value="" selected="seleted" disabled>Seleccione una Categoria</option>';
    while ($fila = $resultado->fetch_array()) {
      $select .= '<option value="'.$fila[0].'">'.$fila[1].'</option>';  
    }
  $select .= '</select>';
  return printf($select);
}
function crearsubCategorias1() {
  $mysql = conexion();
  $sql = "SELECT s.idSubCategoria, s.NombreSubCategoria FROM categoria c, subcategorias s WHERE c.idCategoria = S.Categoria_idCategoria";
  $resultado = $mysql->query($sql);
  $select = '<select name="subcategoria" class="form-control" id="subCate" required>';
    $select .= "<option value='' selected>Seleccione Subcategoria</option>";
    while ($fila = mysqli_fetch_array($resultado)) {
      $select .= "<option value='".$fila[0]."'>".$fila[1]."</option>";
    }
  $select .= '</select>';
  return printf($select);
}
function crearAccion() {
  $mysql = conexion();
  $sql = "SELECT i.idImagen, i.Texto FROM imagen i, subcategorias s WHERE i.SubCategoria_idSubCategoria = S.idSubCategoria";
  $resultado = $mysql->query($sql);
  $select = '<select name="accion" class="form-control" id="accion" >';
    $select .= "<option value='' selected>Seleccione Accion</option>";
    while ($fila = mysqli_fetch_array($resultado)) {
      $select .= "<option value='".$fila[0]."'>".$fila[1]."</option>";
    }
  $select .= '</select>';
  return printf($select);
}
?>
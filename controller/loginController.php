<?php
require_once('../model/conexion.php');
// session_start() abre una nueva sesión o reanuda una ya existente.
session_start();
// Leemos las variables enviadas mediante Ajax
$email = $_POST['usuario'];
$pass = md5($_POST['password']);
// Consulta SQL si existe usuario
$mysql = conexion();
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND clave = '$pass'";
$resultado = $mysql->query($sql);
$fila = $resultado->fetch_array();
if (mysqli_num_rows($resultado) == 1 ) {
  $_SESSION['email'] = $fila[1];
  $_SESSION['iduser'] = $fila[0];
  echo "1";
} else {
  echo "2";
}
?>

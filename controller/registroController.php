<?php
require_once('../model/conexion.php');
$email  = $_POST['email'];
$pass  = md5($_POST['password']);
$pass2 = md5($_POST['password2']);
$ciudad = $_POST['ciudad'];
//$edad   = $_POST['edad'];
//$diagnostico = $_POST['diagnostico'];
//$discapacidad = $_POST['discapacidad'];
$mysql = conexion();
$sqlExiste = "SELECT * FROM usuarios WHERE email = '$email' ";
$resul = $mysql->query($sqlExiste);
if (mysqli_num_rows($resul) > 0) {
  echo '1'; // Correo ya Existe
} else if ($pass == $pass2) {
  $sql = "INSERT INTO usuarios (email, clave, ciudad, cargo) VALUES ('$email','$pass','$ciudad','2')";
  $resultado = $mysql->query($sql);
  echo '3'; // Usuario Agregado
} else {
  echo '2'; // Claves No Coinciden
}

?>

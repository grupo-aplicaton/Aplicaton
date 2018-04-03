 <?php
function conexion () {
  $conectar = new mysqli ("localhost","root","","bd_app");
  if($conectar->connect_error) {
    echo "No se pudo conectar a la BD";
  }
  $conectar->set_charset("utf8");
  return $conectar;
}

?>

<?php
  include("../../controller/seguridad.php");
  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador) si no pasa a ser usuario registrado asociado a numero2

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <link rel="stylesheet" href="../../css/estilos.css">
  <link rel="stylesheet" href="../../css/fontawesome-all.css">
  <link rel="stylesheet" href="../../css/alertify.css">
  <link rel="stylesheet" href="../../css/default.css">
  <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
  <title>Menu</title>
</head>
<body>

  <div class="container">
    <div class="row justify-content-between mt-3">
      <div class="col-auto">
        <h1><strong>Menu</strong></h1>
      </div>
      <div class="col-auto align-self-center">
        <a href=""><i class="fas fa-question-circle fa-lg mr-2 co-12 col-md-auto">Ayuda</i></a>
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Bienvenido: <?php echo ucfirst($_SESSION['email']); ?>
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="../../controller/cerrarSesion.php">Cerrar Sesion</a>
        </div>
      </div>
    </div>

        <form action="" class="opciones-menu jumbotron mt-">
          <fieldset class="borde-menu">
            <legend>Seleccione Opcion</legend>
             <div class="row justify-content-center ">
                 <div class="form-group col-12 col-md-4">
                   <a href="categorias.php"><img src="../../img/icono-menu/categorias1.png" alt="" class="img-fluid"></a>
                   <button id="categorias" class="btn btn-primary col boton-menu">Categorias</button>
                 </div>

                 <div class="form-group col-12 col-md-4 ">
                   <a href="subcategorias.php"><img src="../../img/icono-menu/subcategorias1.png" alt="" class="img-fluid"></a>
                   <button id="subcategorias" class="btn btn-primary col boton-menu">Sub-Categoria</button>
                 </div>
                 <div class="form-group col-12 col-md-4">
                   <a href="acciones.php"><img src="../../img/icono-menu/action.png" alt="" class="img-fluid"></a>
                   <button id="acciones" class="btn btn-primary col boton-menu">Acciones</button>
                 </div>
                 <div class="w-100"></div>
                 <div class="form-group col-12 col-md-4">
                   <a href="comunicar.php"><img src="../../img/icono-menu/comunicar1.png" alt="" class="img-fluid"></a>
                   <button class="btn btn-success col-12 boton-menu">Comunicar</button>
                 </div>
             </div>
          </fieldset>
        </form>

  </div>

  <script src="../../js/jquery-3.2.1.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.js"></script>
  <script src="../../js/operaciones.js"></script>
  <script src="../../js/alertify.js"></script>

</body>
</html>
<?php
  //Destruimos toda la información al cerrar la ventana y la sesion de cierra :)
  //session_destroy();

?>
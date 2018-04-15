<?php
  require_once('../../model/conexion.php');
  include("../../controller/seguridad.php");
  include("vistas.php");
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
  <title>Categoria</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-between mt-3">
      <div class="col-12 col-md-auto">
        <h1><strong>Categorias</strong></h1>
      </div>
      <div class="form-group col-12 col-md-auto align-self-center">
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
              <button id="crear-categoria" class="btn btn-primary col boton-menu">Crear Categorias</button>
            </div>
            <div class="form-group col-12 col-md-4 ">
              <button id="modificar-categoria" class="btn btn-primary col boton-menu">Modificar Categoria</button>
            </div>
            <div class="form-group col-12 col-md-4">
              <button id="eliminar-categoria" class="btn btn-primary col boton-menu">Eliminar Categoria</button>
            </div>
            <div class="w-100"></div>
            <div class="form-group col-12 col-md-4">
              <button class="btn btn-success col-12" id="volver-menu">Volver</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="container crear-categoria">
      <form id="formCategorias" action="" class="opciones-categorias jumbotron mt-" enctype="multipart/form-data">
        <fieldset class="borde-categorias">
          <legend>Crear Categoria</legend>
          <br>
          <div class="form-group col-12 row justify-content-md-center">
            <label for=""class="col-3">Nombre categoria</label>
            <input class="form-control servicioSelecionado col-6" type="text" id="nomCat" name="nomCat" height="50" required>
            <div class="form-group col- ">
              <br>
              <div class="row justify-content-md-center">
                <div class="col-4" id="imagenCate">
                  <img src="" id="imagen" class="previaF" alt=""  height="150" width="150">
                </div>
              </div>
              <label for="exampleFormControlFile1"></label>
              <input type="file" name="file" id="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </div>
          <br>
          <div class="form-group col-12 row justify-content-md-center">
            <button type="button" id="guardarCategoria"  class="btn btn-success col-3" style="margin: 10px;" value="" type="button">Crear</button>
            <button class="btn btn-success col-3 " style="margin: 10px;" id="volver-menu">Volver</button>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="container modificar-categoria">
      <form id="formCategorias" action="" class="opciones-categorias jumbotron mt-" enctype="multipart/form-data">
        <fieldset class="borde-categorias">
          <legend>Modificar Categoria</legend>
          <br>
          <div class="form-group col-12 row justify-content-md-center">
            <table class="table table-bordered table-hover tabla-cate">
              <tr>
                <th>Nombre Categoria</th>
                <th>Ruta Imagen</th>
                <td>Editar</td>
              </tr>
              <tr>
                <?php crearCategoriasModificar(); ?>
              </tr>   
            </table>                     
          </div>
          <br>
          <div class="form-group col-12 row justify-content-md-center">
            <button class="btn btn-success col-4 " id="volver-menu">Volver</button>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="container eliminar-categoria">
      <form id="formCategorias" action="" class="opciones-categorias jumbotron mt-" enctype="multipart/form-data">
        <fieldset class="borde-categorias">
          <legend>Modificar Categoria</legend>
          <br>
          <div class="form-group col-12 row justify-content-md-center">
            <table class="table table-bordered table-hover tabla-cate">
              <tr>
                <th>Nombre Categoria</th>
                <th>Ruta Imagen</th>
                <th>Eliminar</th>
              </tr>
              <tr>
                <?php crearCategoriasEliminar(); ?>
              </tr>   
            </table>                     
          </div>
        
          <br>
          <div class="form-group col-12 row justify-content-md-center">
            <button class="btn btn-success col-4 " id="volver-menu">Volver</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
  <script src="../../js/jquery-3.2.1.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.js"></script>
  <script src="../../js/operaciones.js"></script>
  <script src="../../js/alertify.js"></script>
</body>
</html>
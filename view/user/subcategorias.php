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
  <title>Sub-Categoria</title>
</head>
<body>

  <div class="container">
    <div class="row justify-content-between mt-3">
      <div class="col-12 col-md-auto">
        <h1><strong>Sub-Categorias</strong></h1>
      </div>
      <div class="form-group col-12 col-md-auto align-self-center">
        <a class="" href=""><i class="fas fa-question-circle fa-lg mr-2 co-12 col-md-auto">Ayuda</i></a>
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Bienvenido: <?php echo ucfirst($_SESSION['email']); ?>
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="../../controller/cerrarSesion.php">Cerrar Sesion</a>
        </div>
      </div>
    </div>

        <form action="" id="form-subCate" class="opciones-subcategorias jumbotron mt-2" enctype="multipart/form-data">
          <fieldset class="borde-subcategorias">
            <legend>Seleccione Sub-Categoria</legend>
             <div class="row justify-content-around">
                <div class="form-group col-12 col-lg-3">
                  <label for="exampleFormControlSelect2">Categorias Creadas</label>
                     <div class="col">
                         <?php crearCategorias(); ?>
                     </div>
                     <div class="form-group">
                  <br>
                  <button class="btn btn-primary" id="editar-subcategoria" type="button">Editar</button>
                </div>

                </div>

                <div class="form-group col-12 col-lg-3">
                  <label for="exampleFormControlSelect2">Sub-Categ.-Creadas</label>
                  <?php crearsubCategorias(); ?>
                </div>

                <div class="form-group col-12 col-lg-3 align-self-end">
                  <div class="row">
                    <div class="col" id="imagenCate">
                      <img src="" id="imagen2" class="previaFa" alt="" height="150">
                    </div>
                  </div>
                 <label for="exampleFormControlFile1"></label>
                 <input type="file" name="file" id="fileSub" class="form-control-file" id="exampleFormControlFile1">
               </div>

              <div class="form-group col-12 col-lg-3">
               <label for="">Nombre Subcategoria</label>
               <input class="form-control opcion-seleccionada"  id="nomSub" name="nomSub" type="text" required>
              </div>
            </div>

            <div class="form-group row justify-content-center mt-3">
              <div class="form-group col-12 col-lg-3">
               <button type="button" id="actualizarSubCategoria"  class="btn btn-success" value="" type="button">Actualizar</button>

             </div>
             <div class="form-group col-12 col-lg-3">
               <button id="guardar-subcategoria" class="btn btn-success" type="submit">Guardar</button>

             </div>

             <div class="form-group col-12 col-lg-3">
               <button id="eliminar-subcategoria" class="btn btn-danger" type="button">Eliminar</button>
             </div>
           </div>

           <div class="form-group row justify-content-end">
             <div class="col-12 col-lg-auto ">
               <button id="inicio" class="btn btn-primary">Volver al Menu</button>
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
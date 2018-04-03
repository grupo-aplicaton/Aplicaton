<?php
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
  <title>Acciones</title>
</head>
<body>

  <div class="container">
    <div class="row justify-content-between mt-3">
      <div class="col-12 col-md-auto">
        <h1><strong>Acciones</strong></h1>
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

        <form action="" class="opciones-acciones jumbotron mt-2" id="form-acciones">
          <fieldset class="borde-acciones">
            <legend>Seleccione Acciones</legend>
             <div class="row ">
                <div class="form-group col-12 col-lg-3 ">
                <label for="">Nombre acción</label>  
                <input class="form-control opcionAccion" type="text" name="nomAcc" required >
                <br>
                <?php crearAccion(); ?>
                <br>
                  <button class="btn btn-primary" id="editar-accion" type="button">Editar</button>
              </div>

             <div class="form-group col-12 col-lg-3">
               <label for="">Grabar Audio</label>
               <div class="w-100"></div>

               <button class="btn btn-secondary col-8">Grabar</button>
               <br>
               <br>
               <button ><img src="../../img/parlante.png" alt=""></button>
             </div>

             <div class="form-group co-12 col-lg-3">
               <label for="">Categoria Destino</label>
               <?php crearCategorias1(); ?>
             </div>
             <div class="form-group col-12 col-lg-3">
               <label for="">SubCategoria Destino</label>
               <?php crearsubCategorias1(); ?>
            </div>
            </div>

            <div class="form-group col-12 col-lg-3 align-self-end">
                  <div class="row">
                    <div class="col" id="imagenAcc">
                      <img src="" id="imagen3" class="previaFo" alt="" height="150">
                    </div>
                  </div>
                 <label for="exampleFormControlFile1"></label>
                 <input type="file" name="file" id="fileAc" class="form-control-file" id="exampleFormControlFile1" required>
               </div>



            <div class="form-group row justify-content-center mt-3">
              <div class="form-group col-12 col-lg-3">
               <button type="button" id="actualizarAccion"  class="btn btn-success" value="" type="button">Actualizar</button>

             </div>
             <div class="form-group col-12 col-lg-3">
               <button id="guardar-acciones" class="btn btn-success" type="submit">Guardar</button>

             </div>

             <div class="form-group col-12 col-lg-3">
               <button id="eliminarAccion" class="btn btn-danger" type="button">Eliminar</button>
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
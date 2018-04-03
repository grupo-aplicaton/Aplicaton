<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="stylesheet" href="css/alertify.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>login</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="container">
      
      <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="menu">
          <span class="navbar-toggler-icon"></span>
      </button>
      
        <div class="collapse navbar-collapse" id="navbar">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item home">
              <a href="index.php" class="nav-link active"><i class="fas fa-home fa-2x"></i>Inicio</a>
            </li>
          </ul>
        </div>
      
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-12 col-md-8">
        <form id="validar-login" action="" class="opciones-login jumbotron">
          <fieldset class="borde-login">
            <legend>Login</legend>
            <div class="form-group row mb-5">
                    <div class="col-12 col-md-3">
                      <label for="user" class="col-form-label">Correo</label>
                    </div>
               <div class="col-12 col-md-9">
                 <div class="input-group">
                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                      <input type="email" class="form-control" name="usuario" required>
                    </div>
               </div>
                   </div>

                   <div class="form-group row mb-5">
                    <div class="col-12 col-md-3">
                      <label for="clave" class="col-form-label">Contraseña</label>
                    </div>
               <div class="col-12 col-md-9">
                 <div class="input-group">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      <input type="password" class="form-control" name="password" required>
                    </div>
               </div>
                   </div>

                  <div class="columna col-12 mb-3">
                      <button type="submit" class="btn btn-primary btn-lg" name="button" id="">Ingresar</button>
                  </div>
          </fieldset>
        </form>
      </div>   
    </div>
  </div>

  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/operaciones.js"></script>
  <script src="js/alertify.js"></script>

</body>
</html>
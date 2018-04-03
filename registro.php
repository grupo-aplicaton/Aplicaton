
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/alertify.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Registro</title>
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
    <div class="row justify-content-center mt-2">
      <div class="col-12 col-md-10">
        <form  action="" id="formulario-registro" class="opciones-registro jumbotron">
          <fieldset class="borde-registro">
            <legend>Formulario de Registro</legend>
            <div class="form-group row ">
              <div class="col-12 col-md-3 ">
                <label for="user" class="col-form-label">Correo (*)</label>
              </div>
              <div class="col-12 col-md-9">
                <div class="input-group">
                  <div class="input-group-text"><i class="fa fa-user"></i></div>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 col-md-3">
                  <label for="clave" class="col-form-label">Contraseña (*)</label>
              </div>
              <div class="col-12 col-md-9">
                <div class="input-group">
                  <div class="input-group-text"><i class="fa fa-lock"></i></div>
                  <input type="password" name="password" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 col-md-3">
                <label for="clave" class="col-form-label">Repita Contraseña (*)</label>
              </div>
              <div class="col-12 col-md-9">
                <div class="input-group">
                  <div class="input-group-text"><i class="fa fa-lock"></i></div>
                  <input type="password" name="password2" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 col-md-3">
                <label for="user" class="col-form-label">Ciudad (*)</label>
              </div>
              <div class="col-12 col-md-9">
                <div class="input-group">
                  <div class="input-group-text"><i class="fa fa-globe"></i></div>
                  <input type="text" name="ciudad" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 col-md-3">
                <label for="user" class="col-form-label">Edad</label>
              </div>
              <div class="col-12 col-md-9">
                <div class="input-group">
                  <div class="input-group-text"><i class="fa fa-heart"></i></div>
                  <input type="text" maxlength="3" max="115" name="edad" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 col-md-3">
                <label for="user" class="col-form-label">Diagnostico</label>
              </div>
              <div class="col-12 col-md-9">
                <div class="input-group"> 
                  <textarea type="text" name="diagnostico" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 col-sm-3">
                <label for="user">Discapacidad</label>
              </div>
              <div class="col">
                <div class="col-4 col-sm-auto col-md-4 col-lg-3 form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="visual" name="discapacidad"> Visual
                  </label>
                </div>
                <div class="col-4 col-sm-auto col-md-4 col-lg-3 form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="auditiva" name="discapacidad"> Auditiva
                  </label>
                </div>
                <div class="col-4 col-sm-auto col-md-4 col-lg-3 form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="motora" name="discapacidad"> Motora
                  </label>
                </div>
                <div class="col-4 col-sm-auto col-md-4 col-lg-3 form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4   " value="cognitiva" name="discapacidad"> Cognitiva
                  </label>
                </div>
              </div>
              <div class="columna col-12 mb-3">
                <button type="submit" name="button" class="btn btn-primary btn-md">Ingresar</button>
                <label for="user" class="col-form-label">(*)Campos Obligatorios</label>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/alertify.js"></script>
  <script src="js/operaciones.js"></script>

</body>
</html>










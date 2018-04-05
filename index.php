<?php
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/alertify.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Inicio</title>
  <script src="js/smooth-scroll.min.js"></script>
  <script>
    smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 1700, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function (anchor, toggle) {} // Function to run after scrolling
    });
  </script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light menu fixed-top">
    <div class="container-fluid">

      <a href="index.php" class="navbar-brand">
        <img src="img/logo.png" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
        aria-label="menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item home">
            <a data-scroll href="#sec-1" class="nav-link active">
              <i class="fas fa-home fa-2x"></i>Inicio</a>
          </li>
          <li class="nav-item nosotros">
            <a data-scroll href="#sec-2" class="nav-link">
              <i class="fas fa-users fa-2x"></i>Nosotros</a>
          </li>
          <li class="nav-item ayuda">
            <a data-scroll href="#sec-3" class="nav-link">
              <i class="fas fa-question fa-2x"></i>Ayuda</a>
          </li>
          <li class="nav-item informacion">
            <a data-scroll href="#sec-4" class="nav-link">
              <i <i class="fas fa-info fa-2x"></i>Informacion</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="container-fluid seccion-index" id="sec-1">
    <div class="row carousel">
      <div class="d-none col-md-12 d-sm-block">
        <div class="carousel slide" id="inicio-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#inicio-carousel" data-slide-to="0"></li>
            <li data-target="#inicio-carousel" data-slide-to="1"></li>
            <li data-target="#inicio-carousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="img/carousel/carousel1.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="img/carousel/carousel2.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="img/carousel/carousel3.jpeg" alt="">
            </div>
          </div>

          <a href="#inicio-carousel" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a href="#inicio-carousel" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguente</span>
          </a>
        </div>
      </div>
    </div>

    <div class="container">


      <div class="row mt-2">
        <div class="columna col-xs-12 col-sm-12 col-md-6">
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">Ingresar</button>
        </div>
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="#login" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="validar-login" action="" class="opciones-login">
                  <fieldset class="borde-login">
                    <legend>Login</legend>
                    <div class="form-group row mb-3">
                      <div class="col-12 col-md-3">
                        <label for="user" class="col-form-label">Correo</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <div class="input-group">
                          <div class="input-group-text">
                            <i class="fa fa-user"></i>
                          </div>
                          <input type="email" class="form-control" name="usuario" required>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <div class="col-12 col-md-3">
                        <label for="clave" class="col-form-label">Contraseña</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <div class="input-group">
                          <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                          </div>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="columna col-xs-12 col-sm-12 col-md-6 mt-2">
          <button id="ir-registro" type="button" class="btn btn-primary btn-lg">Registrarse</button>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-2">
          <blockquote class="blockquote blockquote-reverse">
            <p class="h2">"Para la mayoría de la gente, la tecnología hace las cosas más fáciles, para las personas con discapacidad, las
              hace posibles."</p>
            <footer class="blockquote-footer">
              <strong>
                <p>Rick Hansen - Man in Motion</p>
              </strong>
            </footer>
          </blockquote>

        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid seccion-nosotros" id="sec-2">
    <div class="row">
      <div class="col-12 col-md-5 col-lg columna-nosotros align-self-center">
        <img class="img-fluid nosotros d-none d-md-block" src="img/nosotros.jpg" alt="">
      </div>
      <div class="col-12 col-md-7 col-lg columna-nosotros jumbotron">
        <h3>Nosotros</h3>
        <p class="text-justify">
          <strong>Primero que nada, quisieramos saludar y agradecer a ustedes por visitar nuestra página web, la cual fue desarrollada
            con el fin de utilizar la tecnología y los conocimientos existentes, para ir en ayuda de niños con capacidades
            distintas o trastornos de lenguaje. </strong>
        </p>
        <p class="text-justify">
          <strong>También contarles que esta página fue desarrollada por un grupo de estudiantes de cuarto año de ingenieria informatica,
            mencion, desarrollo de sistemas, del Instituto profesional Aiep sede Puerto Montt año 2018. Y bajo una supervisión
            de docentes informáticos y profesionales de la salud, esto, para obtener un resultado satisfactorio por sus usuarios.
            Nuestro grupo esta formado por seis integrantes, en la cual cada uno cumple un rol necesario para cumplir con
            los objetivos: </strong>
        </p>
        <ul>
          <li>
            <strong>Maicol Alvarez</strong>
          </li>
          <li>
            <strong>Patricio Andrade</strong>
          </li>
          <li>
            <strong>Evans Mansillaz</strong>
          </li>
          <li>
            <strong>Ricardo Perez</strong>
          </li>
          <li>
            <strong>Erwin Zamorata</strong>
          </li>
          <li>
            <strong>Rene zuniga</strong>
          </li>
        </ul>
        <p class="text-justify">
          <strong>Esperando que disfruten su contenido, que su estructura y diseño sea de ayuda y gusto, se despiden muy atentamente.</strong>
        </p>
        <p class="text-justify">
          <strong>grupo.desarrolladorPM@gmail.com</strong>
        </p>
      </div>
    </div>
  </div>

  <div class="container-fluid seccion-ayuda " id="sec-3">
    <div class="row mt-1">
      <div class="col-12 col-md-7 col-lg columna-nosotros jumbotron">
        <h2>Ayuda</h2>
        <p class="text-justify">
          <strong>Ser un equipo que contribuya al desarrollo de sistemas informáticos fundados en valores de integración social,
            que construya un país más justo, integrado, con oportunidades tecnológicas-informáticas que permitan la igualdad
            en todas las personas integrando y apoyando a aquellas que cuenten con discapacidades. Anhelamos mejoras definitivas
            socioculturales e informáticas en niños, jóvenes, adultos, así como también a sus familias mediante la participación
            activa e inclusión ciudadana, potenciando al máximo la utilización de nuevas tecnologías que apoyen y apunten
            al fortalecimiento de sus capacidades, vínculo social e integración en cada área.</strong>
        </p>
      </div>
      <div class="col-12 col-md-5 col-lg columna-nosotros align-self-center">
        <img class="img-fluid nosotros d-none d-md-block" src="img/nosotros.jpg" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid seccion-info " id="sec-4">
    <div class="row ">
      <div class="col-12 col-md-5 col-lg columna-nosotros align-self-center">
        <img class="img-fluid nosotros d-none d-md-block" src="img/nosotros.jpg" alt="">
      </div>
      <div class="col-12 col-md-7 col-lg columna-nosotros jumbotron">
        <h2>Informacion</h2>
        <p class="text-justify">
          <strong>El presente sistema busca colaborar a los usuarios que no se puedan comunicar de una forma típica (lenguaje hablado
            o el lenguaje verbal), a que puedan expresar sus necesidades o acciones a través de un sistema creado en colaboración
            con profesionales, tanto de las áreas correspondiente al desarrollo cognitivo y verbal, así como también al área
            de la tecnología e informática, con el objetivo que se genere un sistema de comunicación aumentativa el cual
            permita el desarrollo íntegro de las necesidades de los usuarios.
            <br> En este sistema encontrarás una metodología de trabajo basada en la colaboración de los acompañantes; donde
            estos, deben entregar imágenes que generen estimulación y pueda tener un significado para el usuario en torno
            a la comunicación que se pueda entregar, trabajando a través de fichas, donde al momento de presionar sobre esta,
            se reproducirá una acción o emoción previamente grabada por el acompañante, con el objetivo que se pueda originar
            una conversación.
          </strong>
        </p>
        <p class="text-left">
          <strong>Información:</strong>
        </p>
        <div>
          <ul>
            <strong>
              <li class="text-center">Instituto profesional AIEP, sede Puerto Montt</li>
              <li class="text-center">2017-2018</li>
              <li class="text-center">Taller Avanzado de Proyectos de Análisis.</li>

              <li class="text-center">Equipo de Desarrollo:</li>
              <li class="text-center">Maicol Álvarez – Jefe de Proyecto.</li>
              <li class="text-center">René Zúñiga – JP(S), Programador.</li>
              <li class="text-center">Erwin Zamorata – Programador.</li>
              <li class="text-center">Ricardo Pérez – Programador.</li>
              <li class="text-center">Patricio Andrade – Documentador.</li>
              <li class="text-center">Evans Mansilla – Tester.</li>
              <br>
              <li class="text-center">Colaboradores:</li>
              <li class="text-center">Emilio Muñoz – Fonoaudiólogo, Instituto Teletón.</li>
              <li class="text-center">Alejandro Gallardo – Diseñador Gráfico.</li>
            </strong>
          </ul>
        </div>
      </div>
    </div>
    <span class="ir-arriba">
      <i class="fas fa-angle-double-up"></i>
    </span>
  </div>


  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/alertify.js"></script>
  <script src="js/operaciones.js"></script>
  <script src="js/barra_menu.js"></script>
</body>

</html>
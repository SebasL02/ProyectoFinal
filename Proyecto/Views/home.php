<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<?php
if (isset($_GET["info"])) {
  if ($_GET["info"] == 2) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
        <use xlink:href="#info-fill" />
      </svg>
      <strong>Inició sesión con exito</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  }
  if ($_GET["info"] == 3) {
  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
        <use xlink:href="#info-fill" />
      </svg>
      <strong>Se registró con exito</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    }
    if ($_GET["info"] == 5) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
          <use xlink:href="#info-fill" />
        </svg>
        <strong>Se publico su partido con exito</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
    }
    if ($_GET["info"] == 7) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
          <use xlink:href="#info-fill" />
        </svg>
        <strong>Se cerro su sesión con exito</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
    }
    if ($_GET["info"] == 9) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
          <use xlink:href="#info-fill" />
        </svg>
        <strong>Se elimino con exito el usuario.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
    }
    if ($_GET["info"] == 10) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
          <use xlink:href="#info-fill" />
        </svg>
        <strong>Felicidades, ya te has inscrto en un partido</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
<?php
  }
}
?>

<div class="container-fluid">

  <div class="row">

    <div class="col-md-12 ">

      <br>


      <div class="rounded d-flex justify-content-center ">
        <div class="shadow-lg p-5 bg-light img-home" style="height: 500px;">
          <div class="text-center">
            <h1 class="text-color">Te damos la bienvenida </h1>

            <p class="text-color">Si te interesa jugar fútbol y reservar en algunas canchas de la ciudad de Bogotá, Colombia estas en el lugar correcto. Ven registrate para que puedas empezar a jugar partidos tú con familia y amigos. </p>
            <p class="text-color">En este sitio web podrás organizar partidos o torneos donde las personas se podrán unir.
              <br>
              <br>
              Juega con las personas que comparten esta hermosa pasión, ¡El Fútbol!.
              <br>
              <br>
              En los torneos podrás ganar dinero demuestrando que eres de los mejores con el balón.
              <br>
              <br>
              ¿Qué esperas?
            </p>
          </div>
          <br>
          <center>
            <a href="<?php echo VIEWS_PATH; ?>signup.php" type="button" class="btn btn-primary">REGISTRATE</a>
          </center>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="container-fluid">

  <div class="row">

    <div class="col-md-12 ">

      <br>


      <div class="rounded d-flex justify-content-center  ">
        <div class="shadow-lg p-5 bg-light div-partidos">

          <div class="row">
            <div class="col-md-5">
              <img alt="Imagen de un aprtido representando que es un amistoso" src="<?php echo IMG_PATH . "soccer-match.jpg" ?>" class="img-rounded" />
            </div>
            <div class="col-md-5">
              <h2>Viernes 8 de abril 2022</h2>
              <p>
                Tipo: Amistoso
              </p>
              <p>
                Lugar: Parque Jazmin, calle 1 # 34 -9
              </p>
              <p>
                Tipo partido: Futbol 5
              </p>
              <p>
                Hora: 5:00 p.m
              </p>
              <p>
                Organizador: Pepito Perez
              </p>

            </div>
            <div class="col-md-2">

              <a  href="<?php echo CONTROLLER_PATH . "asistir_partido.php" ?>" type="button" class="btn btn-primary boton-partidos">
                ASISTIR
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">

  <div class="row">

    <div class="col-md-12 ">

      <br>


      <div class="rounded d-flex justify-content-center  ">
        <div class="shadow-lg p-5 bg-light div-partidos" style="background-color: red;">

          <div class="row">
            <div class="col-md-5">
              <img alt="Imagen de un trofeo representando que es un torneo" src="<?php echo IMG_PATH . "soccer-tournament.jpg" ?>" class="img-rounded" />
            </div>
            <div class="col-md-5">
              <h2>Sábado 25 de junio 2022</h2>
              <p>
                Tipo: Torneo
              </p>
              <p>
                Lugar: Campin Carrera 30 y Calle 57
              </p>
              <p>
                Tipo partido: Futbol 11
              </p>
              <p>
                Hora: 5:00 p.m
              </p>
              <p>
                Organizador: Pepito Perez
              </p>

            </div>
            <div class="col-md-2">

              <a href="<?php echo CONTROLLER_PATH . "asistir_partido.php" ?>" type="button" class="btn btn-primary boton-partidos">
                ASISTIR
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php
include(VIEWS_PATH . "footer.php");
?>
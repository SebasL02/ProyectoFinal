<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<br>

<div class="background-reserve">
  <br>

  <?php
  if (isset($_GET["info"])) {
    if ($_GET["info"] == 4) {
  ?>
      <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
          <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <strong>¡Datos Incorrectos!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
  }
  if ($_GET["info"] == 6) {
  ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
        <use xlink:href="#info-fill" />
      </svg>
      <strong>No ha iniciado sesión</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
    }
  }
  ?>

  <div class="rounded d-flex justify-content-center">


    <div class="shadow-lg p-5 bg-light" style="border-radius: 10px;">

      <div class="text-center">
        <h3 class="text-primary">Reserva</h3>
      </div>
      <div class="p-4">



        <form action="<?php echo CONTROLLER_PATH; ?>reserva_canchas.php" method="POST">
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
            <input type="text" class="form-control" placeholder="Nombre de quien reserva" name="nombre">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
            <input type="email" class="form-control" placeholder="Correo  electrónico" name="correo" required>
          </div>
          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="localidad">
              <option selected> Localidad </option>
              <option>Usaquen</option>
              <option>Chapinero</option>
              <option>Santa fe</option>
              <option>Usme</option>
              <option>Bosa</option>
              <option>Kennedy</option>
              <option>Fontibón</option>
              <option>Engativá</option>

            </select>
          </div>

          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="tipo_cancha">
              <option selected> Cancha </option>
              <option>Futbol 5 sintética</option>
              <option>Futbol 5 asfalto</option>
              <option>Fútbol 8 sintética</option>
              <option>Futbol 11 sintética</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="tipo_reserva">
              <option selected> Tipo de reserva </option>
              <option>Amistoso</option>
              <option>Torneo</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <label for="start">Fecha</label>
            <input type="date" id="start" name="trip-start" value="2022-01-01" min="2022-01-01" max="2023-01-01" name="fecha">
          </div>

          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="hora">
              <option selected> Hora </option>
              <option>7:00 a.m. - 8:00 a.m.</option>
              <option>8:00 a.m. - 9:00 a.m.</option>
              <option>9:00 a.m. - 10:00 a.m.</option>
              <option>10:00 a.m. - 11:00 a.m.</option>
              <option>11:00 a.m. - 12:00 m</option>
              <option>12:00 m. - 1:00 p.m.</option>
              <option>1:00 p.m. - 2:00 p.m.</option>
              <option>2:00 p.m. - 3:00 p.m.</option>
              <option>3:00 p.m. - 4:00 p.m.</option>
              <option>4:00 p.m. - 5:00 p.m.</option>
              <option>5:00 p.m. - 6:00 p.m.</option>
              <option>6:00 p.m. - 7:00 p.m.</option>
              <option>7:00 p.m. - 8:00 p.m.</option>
              <option>8:00 p.m. - 9:00 p.m.</option>
            </select>
          </div>

          <div class="d-grid col-12 mx-auto">
            <button type="submit" class="btn btn-primary" name="ingreso_reserva"> Reservar</a>
          </div>

        </form>
      </div>
    </div>
  </div>
  <br>
</div>

<?php
include(VIEWS_PATH . "footer.php");
?>
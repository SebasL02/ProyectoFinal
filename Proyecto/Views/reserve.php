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

<div>

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
            <input type="email" class="form-control" placeholder="Correo  electrónico" name="email" required>
          </div>
          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="localidad">
              <option selected>Selecciona</option>
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
              <option selected>Selecciona</option>
              <option>Futbol 5 sintética</option>
              <option>Futbol 5 asfalto</option>
              <option>Fútbol 8 sintética</option>
              <option>Futbol 11 sintética</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="tipo_reserva">
              <option selected>Seleccionar</option>
              <option>Amistoso</option>
              <option>Torneo</option>
            </select>
          </div>
          
          <div class="input-group mb-3">
            <label for="start">Fecha</label>
            <input type="date" id="start" name="trip-start" value="2022-01-01" min="2022-01-01" max="2023-01-01" name="fecha">
          </div>

          <div class="d-grid col-12 mx-auto">
            <button type="submit" class="btn btn-primary" name="ingreso_reserva"> Reservar</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<?php
include(VIEWS_PATH . "footer.php");
?>
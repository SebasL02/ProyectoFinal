<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img class="img-signup" alt="Imagen de chico en la cancha de Futbol" src="<?php echo IMG_PATH . "Cancha.jpg" ?>" />
    </div>
    <div class="col-md-6">


      <div class="rounded d-flex justify-content-left">
        <div class="shadow-lg p-5 bg-light" style="border-radius: 25px;">
          <div class="text-center">
            <h3 class="text-primary">Registrate</h3>
          </div>
          <div class="p-4">
          <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de quien Reserva</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Pepito Perez">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Localidad</label>
    <select class="form-control" id="exampleFormControlSelect1">
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
  <div class="form-group">
    <label for="exampleFormControlSelect2">Tipo de cancha</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Futbol 5 sintética</option>
      <option>Futbol 5 asfalto</option>
      <option>Fútbol 8 sintética</option>
      <option>Futbol 11 sintética</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Tipo de Reserva</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Amistoso</option>
      <option>Torneo</option>
      <option>Fútbol 8 sintética</option>
      <option>Futbol 11 sintética</option>
      
    </select>
  </div>
</form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

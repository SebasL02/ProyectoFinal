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
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
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
    <label for="exampleFormControlSelect1">Tipo de cancha</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Futbol 5 sintética</option>
      <option>Futbol 5 asfalto</option>
      <option>Fútbol 8 sintética</option>
      <option>Futbol 11 sintética</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Tipo de Reserva</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Amistoso</option>
      <option>Torneo</option>
     
      
    </select>
  </div>
  <div>
  <label for="start">Fecha</label>

<input type="date" id="start" name="trip-start"
       value="2022-01-01"
       min="2022-01-01" max="2023-01-01">

  </div>
  <br>
  <button type="button" class="btn btn-dark" >Reservar</button>
  
</form>
</div>

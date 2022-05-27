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

<br>


    <div class="rounded d-flex justify-content-right">
        <div class="shadow-lg p-5 bg-light" style="border-radius: 100px;">
          <div class="text-center">
            <h3 class="text-primary">Te damos la bienvenida </h3>
          </div>
		  <div class="text-center">
		  <p>Si te intereza reservar en algunas canchas del la ciudad de Bogotá estas en el lugar correcto. Ven registrate para que puedas empezar a jugar tus partidos con familia y amigos </p>
		  </div>
		  
          <div class="col-md-6">
    
	<img  class="img-signup" alt="Imagen de  un balón" style="border-radius: 100px;"src="<?php echo IMG_PATH . "cancha.jpg" ?>"  width="1800px" height="1000px" />


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

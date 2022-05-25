<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<h1>¡Registrate!</h1>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img class="img-signup" alt="Imagen de chico pateando un balón" src="<?php echo IMG_PATH . "soccer-signup.jpg" ?>" />
    </div>
    <div class="col-md-6">


      <div class="rounded d-flex justify-content-left">
        <div class="shadow-lg p-5 bg-light" style="border-radius: 25px;">
          <div class="text-center">
            <h3 class="text-primary">Crea una cuenta</h3>
          </div>
          <div class="p-4">
            <form action="<?php echo CONTROLLER_PATH; ?>validar_registro_inicio_sesion.php" method="POST">
              <div class="input-group mb-3">
                <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                <input type="text" class="form-control" placeholder="Usuario" name="Nombre" required minlength=4>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                <input type="email" class="form-control" placeholder="Correo  electrónico" name="Correo" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                <input type="password" class="form-control" placeholder="Contraseña" name="Clave" required  minlength=8>
              </div>
              <div class="d-grid col-12 mx-auto">
                <button type="submit" class="btn btn-primary" name="registro_usuario"> Registrarse</a>
              </div>
              <p class="text-center mt-3">¿Ya tienes una cuenta?
                <a href="login.php"><span class="text-primary">Inicia Sesión</span></a>
              </p>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

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

  <div class="row img-background-login">
    <div class="col-md-6 ">
     
      <!--<img class="img-login" alt="Imagen de una cancha de futbol." src="" style="width: 200%;"  />-->
    </div>
    <div class="col-md-6">

      <br>
      <br>
      <br>
      <?php
      if (isset($_GET["info"])) {
        if ($_GET["info"] == 1) {
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
        if ($_GET["info"] == 8) {
        ?>
          <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
              <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>No has iniciado sesión</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php
        }
      }
      ?>

      <div class="rounded d-flex justify-content-left">
        <div class="shadow-lg p-5 bg-light" style="border-radius: 25px;">
          <div class="text-center">
            <h3 class="text-primary">Inicia sesión</h3>
          </div>
          <div class="p-4">
            <form action="<?php echo CONTROLLER_PATH; ?>validar_registro_inicio_sesion.php" method="POST">

              <div class="input-group mb-3">
                <span class="input-group-text bg-primary"><i class="bi bi-envelope text-white"></i></span>
                <input type="email" class="form-control" placeholder="Correo  electrónico" name="Correo" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                <input type="password" class="form-control" placeholder="Contraseña" name="Clave" required minlength=8>
              </div>
              <div class="d-grid col-12 mx-auto">
                <button type="submit" class="btn btn-primary" name="inicio_sesion_usuario"> INICIA SESIÓN</a>
              </div>
              <p class="text-center mt-3">¿No tienes una cuenta?
                <a href="signup.php"><span class="text-primary">Regristraté</span></a>
              </p>
            </form>
          </div>
        </div>
      </div>
      <br>
      <br>
    </div>
  </div>
</div>



<?php
include(VIEWS_PATH . "footer.php");
?>
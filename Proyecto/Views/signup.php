<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<h1>¡REGISTRATE AHORA!</h1>

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



<!-- 
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

<?php
include(VIEWS_PATH . "footer.php");
?>
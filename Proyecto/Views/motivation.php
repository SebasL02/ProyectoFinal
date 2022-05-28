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

		<div class="col-md-12 ">

			<br>


			<div class="rounded d-flex justify-content-center ">
				<div class="shadow-lg p-5 bg-light img-motivation" style="height: 500px;">
					<div class="text-center">
						<h2 class="text-color">
							Hola Amante al deporte:
						</h2>
						<p class="text-color">
							Jugar Futbol Es importante porque te ayuda a tu salud por el esfuerzo que debes de hacer, además no hay nada mejor que dejar todo por la pasión de la
							camiseta, imagínate con tus amigos o familia eso también es chévere y una razón mas para compartir y no te cuesta nada.
							<br>
							En los torneos dar a máximo tu nivel que tienes para que puedas destacar, quien sabe que una casa talentos este buscando personas.
							<br>

							Por eso te invitamos a que le des click aquí para que puedas empezar a disfrutar de las canchas disponibles

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

<?php
include(VIEWS_PATH . "footer.php");
?>


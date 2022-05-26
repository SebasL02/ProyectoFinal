<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH . "Conexion.php");
$db = Conexion::getConnection();




if (isset($_POST["ingreso_reserva"])) {
  //echo "bbbbbbbbbbbb";
  $nombre = trim($_POST['nombre']);
  $email = trim($_POST['email']);
  $localidad = trim($_POST['localidad']);
  $tipo_cancha = trim($_POST['tipo_cancha']);
  $tipo_reserva = trim($_POST['tipo_reserva']);
  $fecha = trim($_POST['fecha']);


  $query = "INSERT INTO reserva(nombre, email, localidad, tipo_cancha, tipo_reserva, fecha) VALUES ('$nombre', '$email', '$localidad', '$tipo_cancha', '$tipo_reserva', '$fecha')";
  $result = $db->query($query);
  //$result2 = mysqli_query($db, $query);


  echo $query;

  if ($result) {
    echo "ha funcioandooooooo";
  } else {
    echo "algo ha fallado";
  }
  //header("Location:" . VIEWS_PATH . "home.php");
}

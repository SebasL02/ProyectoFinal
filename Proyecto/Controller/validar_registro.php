<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH . "Conexion.php");
$db = Conexion::getConnection();
echo "aaaaaaaaaaaaa";
$query = "SELECT * FROM usuarios WHERE Correo = '" . $_POST["Correo"] . "' ";
$result = $db->query($query);
if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    session_start();
    $_SESSION["id_usuario"] = $row["id"];
    $_SESSION["Correo"] = $row["Correo"];
    $_SESSION["Nombre"] = $row["Nombre"];
    $_SESSION["inicio_sesion"] = $row["inicio_sesion"];
    echo "si";
  }
  //header("Location:".VIEWS_PATH."home_user.php");
} else {
  echo "Datos Incorrectos";
  //header("Location:" . VIEWS_PATH . "login.php?info=1");
}

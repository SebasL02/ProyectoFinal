<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH . "Conexion.php");
$db = Conexion::getConnection();




if (isset($_POST["registro_usuario"])) {
  //echo "bbbbbbbbbbbb";
  $nombre = trim($_POST['Nombre']);
  $correo = trim($_POST['Correo']);
  $clave = trim($_POST['Clave']);
  $inicio_sesion = 1;

  $query = "INSERT INTO usuarios(nombre, correo, clave, inicio_sesion) VALUES ('$nombre','$correo','$clave','$inicio_sesion')";
  $result = $db->query($query);
  //$result2 = mysqli_query($db, $query);


  echo $query;

  if ($result) {
    echo "ha funcioandooooooo";
  } else {
    echo "algo ha fallado";
  }
  header("Location:" . VIEWS_PATH . "home.php");
}



if (isset($_POST['inicio_sesion_usuario'])) {
  echo "esooooooo";
  session_start();
  $db = Conexion::getConnection();
  $correo = trim($_POST['Correo']);
  $clave = trim($_POST['Clave']);
  $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$clave'";
  $result = $db->query($query);
  echo $query;
  if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['correo'];
    echo $row['clave'];
    if ($result) {
      header("Location:" . VIEWS_PATH . "home.php");
    } else {
      echo "erorrrrrrrrr";
    }
  }
}else{
  
  echo "Usuario no encontrado";
}
}

?>

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
  $inicio_sesion = 0;

  $query = "INSERT INTO usuarios(nombre, correo, clave, inicio_sesion) VALUES ('$nombre','$correo','$clave','$inicio_sesion')";
  $result = $db->query($query);
  //$result2 = mysqli_query($db, $query);


  echo $query;

  if ($result) {
    echo "ha funcioandooooooo";
    header("Location:" . VIEWS_PATH . "home.php?info=3");
  } else {
    echo "algo ha fallado";
    //header("Location:" . VIEWS_PATH . "home.php");
  }
}



if (isset($_POST['inicio_sesion_usuario'])) {
  echo "esooooooo";
  session_start();
  $db = Conexion::getConnection();
  $correo = trim($_POST['Correo']);
  $clave = trim($_POST['Clave']);
  $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$clave'";
  $result = $db->query($query);
  //echo $query;
  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      //echo $row['correo'];
      //echo $row['clave'];



      //echo $_SESSION["id_usuario"];

      if ($result) {

        $queryInicio = "UPDATE usuarios SET inicio_sesion = 1 where id_usuario=". $row['id_usuario'];
        $db->query($queryInicio);
        $_SESSION["id_usuario"] = $row["id_usuario"];
        $_SESSION["nombre"] = $row["nombre"];
        $_SESSION["correo"] = $row["correo"];
        $_SESSION["status"] = $row["inicio_sesion"];

        echo $row["inicio_sesion"];
        header("Location:" . VIEWS_PATH . "home.php?info=2");
      } else {
        echo "erorrrrrrrrr";
      }
    }
  } else {

    echo "Usuario no encontrado";
    header("Location:" . VIEWS_PATH . "login.php?info=1");
  }
}

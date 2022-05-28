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
  $correo = trim($_POST['correo']);

  $query_1 = "SELECT * FROM usuarios where nombre = '$nombre' AND correo = '$correo'";
  $result = $db->query($query_1);
  echo $query_1;
  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      //echo $row['nombre'];
      //echo $row['correo'];
      session_start();
      print_r($_SESSION);
      //echo $_SESSION["nombre"]. " ".$_SESSION["status"] ;

      if ($row['inicio_sesion'] == 0) {
        header("Location:" . VIEWS_PATH . "reserve.php?info=6");
      }
      if ($result) {
        echo "biennn";
        $partidos = $row['partidos_publicados'] + 1;
        $queryPartidos = "UPDATE usuarios SET partidos_publicados ='$partidos' WHERE id_usuario=" . $row['id_usuario'];
        $db->query($queryPartidos);
        echo "wwwwwwwwwww".$row['partidos_publicados'];


        

        


        header("Location:" . VIEWS_PATH . "home.php?info=5");
      } else {
        echo "erorrrrrrrrr";
      }
    }
  } else {
    echo "algo salio mallllllll";
    header("Location:" . VIEWS_PATH . "reserve.php?info=4");
  }








  /*
  $nombre = trim($_POST['nombre']);
  $email = trim($_POST['email']);
  $localidad = trim($_POST['localidad']);
  $tipo_cancha = trim($_POST['tipo_cancha']);
  $tipo_reserva = trim($_POST['tipo_reserva']);
  $fecha = trim($_POST['fecha']);
  $hora = trim($_POST['hora']);


  $query = "INSERT INTO reserva(nombre, email, localidad, tipo_cancha, tipo_reserva, fecha, hora) VALUES ('$nombre', '$email', '$localidad', '$tipo_cancha', '$tipo_reserva', '$fecha', '$hora')";
  $result = $db->query($query);
  //$result2 = mysqli_query($db, $query);


  echo $query;

  if ($result) {
    echo "ha funcioandooooooo";
  } else {
    echo "algo ha fallado";
  }
  //header("Location:" . VIEWS_PATH . "home.php");

  */
}

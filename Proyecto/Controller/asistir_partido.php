<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH . "Conexion.php");
$db = Conexion::getConnection();

session_start();

if (isset($_SESSION['id_usuario'])) {
    $id = $_SESSION['id_usuario'];
    echo $id." asisteeeeeeeeee "  ;
    $queryUsuarios = "SELECT * FROM usuarios where id_usuario = '$id'";
    $result = $db->query($queryUsuarios);
    if ($result->num_rows > 0) {
        while ($usuario = mysqli_fetch_assoc($result)) {
            $partidos = $usuario['partidos_asistidos'] + 1; 
            echo $usuario['partidos_asistidos'];
            $queryPartidos = "UPDATE usuarios SET partidos_asistidos ='$partidos' WHERE id_usuario=" . $id;
            $db->query($queryPartidos);
            header("Location:" . VIEWS_PATH . "home.php?info=10");
        }
    } else {
        header("Location:" . VIEWS_PATH . "login.php?info=8");
    }
}

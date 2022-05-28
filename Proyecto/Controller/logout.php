<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH . "Conexion.php");
$db = Conexion::getConnection();
session_start();
$queryInicio = "UPDATE usuarios SET inicio_sesion = 0 where id_usuario=". $_SESSION['id_usuario'];
$db->query($queryInicio);

    
    //print_r($_SESSION);
    echo $_SESSION['id_usuario'];

    unset($_SESSION['id_usuario']);

    echo $_SESSION['id_usuario'];
    header("Location:" . VIEWS_PATH . "home.php?info=7");
?>
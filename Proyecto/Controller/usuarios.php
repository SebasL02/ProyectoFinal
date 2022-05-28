<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "Conexion.php");

//crear función
function getAllDataUser($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryViajes = "SELECT * FROM usuarios where id_usuario = '$id'";
    $result = $db->query($queryViajes);
    return $result;
}

//Con el punto se concatena
function getOneuser($id)
{
    $db = Conexion::getConnection();
    $queryViaje = "SELECT * FROM usuarios WHERE id_usuario=" . $id;
    $result = $db->query($queryViaje);
    if ($result->num_rows > 0) {
        return $result;
    }
    return null;
}


//crear función
function updateUser($id, $nombre, $correo, $clave)
{
    echo " actualizaaaaaaaaaaaaaa";
    
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryViajes = "UPDATE usuarios SET nombre ='$nombre', correo ='$correo', clave ='$clave' WHERE id_usuario=" . $id;
    $db->query($queryViajes);
}


//crear función
function deleteOneViaje($id)


{
    echo " eliminaaaaaaaaaaaaaaaaa";
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryViajes = "DELETE FROM usuarios WHERE id_usuario=" . $id;
    //echo $queryViajes;
    $db->query($queryViajes);
}
if (isset($_GET["elimina"]) && isset($_GET["id"])) {
    deleteOneViaje($_GET["id"]);
    header("Location:" . VIEWS_PATH . "home.php?info=9");
}
if (isset($_POST['actualiza_usuario'])) {
    updateUser($_POST["id_usuario"], $_POST["nombre"], $_POST["correo"], $_POST["clave"]);
    header("Location:" . VIEWS_PATH . "edit_perfil.php?info=11");
}


<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "usuarios.php");
?>

<?php
if (isset($_GET["info"])) {
  if ($_GET["info"] == 11) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
        <use xlink:href="#info-fill" />
      </svg>
      <strong>Usuario editado correctamente</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  }
}
?>


<table class="table table-stripped">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Clave</th>
            <th scope="col">Partidos Publicados</th>
            <th scope="col">Partidos Jugados</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            $result = getAllDataUser($_SESSION['id_usuario']);
            //print_r($result);
            //echo $result[num_rows];
            if ($result != null) {
                //Vamos a recorrer la bd
                while ($usuario = mysqli_fetch_assoc($result)) {
                    //Para enviar mas de un parametro se usa ?
                    
        ?>
                    <tr>
                        <td><?php echo $usuario["nombre"]; ?></td>
                        <td><?php echo $usuario["correo"]; ?></td>
                        <td><?php echo $usuario["clave"]; ?></td>
                        <td><?php echo $usuario["partidos_publicados"]; ?></td>
                        <td><?php echo $usuario["partidos_asistidos"]; ?></td>
                        <td>
                            <a href="?editar" name="editar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="?id=<?php echo $usuario["id_usuario"]; ?>&elimina=1">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
        <?php
                }
            } else {
                echo $_SESSION['id_usuario'] . "nulooooooooo";
                header("Location:" . VIEWS_PATH . "home.php");
            }
        } else {
            echo "nooo ha iniciado sesion";
            header("Location:" . VIEWS_PATH . "login.php?info=8");
        }
        ?>

    </tbody>
</table>

<?php

if (isset($_GET["editar"]) && !isset($_GET["elimina"])) {
    //echo $_GET["id_usuario"];
    //echo "siiiiiiiiiiiiii";
    
    //echo $_SESSION['id_usuario'];
    $result_one_viaje = getOneuser($_SESSION['id_usuario']);
    //print_r($result_one_viaje);
    while ($row = mysqli_fetch_assoc($result_one_viaje)) {
        //print_r($row);
?>
        <form method="POST" action="<?php echo CONTROLLER_PATH; ?>usuarios.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="<?php echo $row["nombre"]; ?>" class="form-control" id="nombre" name="nombre" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">Ingrese el nuevo nombre.</div>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" value="<?php echo $row["correo"]; ?>" class="form-control" id="correo" name="correo" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">Ingrese el nuevo correo.</div>
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Clave</label>
                <input type="number" value="<?php echo $row["clave"]; ?>" class="form-control" id="clave" name="clave" aria-describedby="numberHelp">
                <div id="numberHelp" class="form-text">Ingrese la nueva clave.</div>
            </div>
            
            <input type="hidden" value="<?php echo $row["id_usuario"]; ?>" name="id_usuario">
            <input type="hidden" name="actualiza_usuario">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
<?php
    }
}
?>




<?php
include(VIEWS_PATH . "footer.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="<?php echo CSS_PATH ; ?>bootstrap.css">
  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="<?php echo IMG_PATH . "ico.png"; ?>">
    <title>Document</title>
</head>

<body class="body-color-background">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo VIEWS_PATH; ?>home.php"><img style="width: 200px; height: 100px;" src="<?php echo IMG_PATH . "logo.png"; ?>" alt="Logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo VIEWS_PATH; ?>home.php">Inicio
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo VIEWS_PATH; ?>motivation.php">Motivación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo VIEWS_PATH; ?>reserve.php">Reserva</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>signup.php">Registrarse</a>
                                <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>login.php">Iniciar Sesión</a>
                                <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>edit_perfil.php">Editar perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>logout.php">Cerrar Sesión</a>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
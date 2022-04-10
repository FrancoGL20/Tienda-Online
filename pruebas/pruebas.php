<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <?php
        session_start();
        //declarar mi sesion
        //$ SESSION[ 'misesion'] = "facultad autodidacta";
        //echo $ SESSION[ 'miSesion'];
        $_SESSION['miSesion'] = array();
        //$ SESSION[ 'miSesion'][0] = "facultad";
        //$ SESSION['miSesion'][1] = 2020;
        $_SESSION['miSesion']['nombre'] = "facultad";
        $_SESSION['miSesion']['edad'] = 30;
        $_SESSION['miSesion']['pais'] = "México";

        // echo $_SESSION['miSesion']['edad'];
        echo "<pre>";
        print_r($_SESSION['miSesion']);
        echo "</pre>";
    ?>
</body>
</html>

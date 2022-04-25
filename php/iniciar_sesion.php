<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include "./head_html.php";
    ?>
    <title>Inicio de sesión</title>
    <!-- icono -->
    <link rel="shortcut icon" href="./../img/logo.jpg">
    <!-- normalize -->
    <link rel="preload" href="./../css/normalize.css" as="style">
    <link rel="stylesheet" href="./../css/normalize.css">
    <!-- estilos -->
    <link rel="preload" href="./../css/styles-iniciosesion-registro.css" as="style">
    <link rel="stylesheet" href="./../css/styles-iniciosesion-registro.css">
</head>

<body class="container">
    <!-- barra de navegación -->
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- responsividad del header, marca -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- marca -->
                    <a class="navbar-brand" href="./../index.php">Geek Store F</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <!-- menú izquierdo-->
                    <ul class="nav navbar-nav">
                        <li><a href="./../index.php">Lista de productos</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="./pruebas/pruebas.php">Pruebas</a></li>
                    </ul>
                    <!-- menú derecho -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="./registro.php"><span class="glyphicon glyphicon-user"></span>Registrarse
                            </a>
                        </li>
                        <li class="active">
                            <a href="#"><span class="glyphicon glyphicon-log-in">
                                </span>Ingresar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- ingreso de datos -->

    <div class="centrar">
        <h1 style="text-align:center; margin:0">Iniciar sesión</h1>
        <form class="form form-horizontal">
            <div class="form-group">
                <label for="correo" class="control-label">Correo</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <input type="email" class="form-control" id="correo" placeholder="contacto@dominio.com">
                </div>
            </div>
            <div class="form-group">
                <label for="contrasena" class="control-label">Contraseña</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></div>
                    <input type="password" class="form-control" id="contrasena" placeholder="Password">
                </div>
            </div>
            <p class="no-registrado">¿No tienes cuenta? <a class="btn-link" href="./registro.php">Registrarse</a></p>
            <div class="form-group boton">
                <input type="submit" class="btn btn-default comprar" value="Entrar"></input>
            </div>
        </form>
    </div>
</body>

</html>
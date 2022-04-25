<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include "./head_html.php";
    ?>
    <title>Registro</title>
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
                        <li class="active">
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Registrarse
                            </a>
                        </li>
                        <li>
                            <a href="./iniciar_sesion.php"><span class="glyphicon glyphicon-log-in">
                                </span>Ingresar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- formulario -->
    <div class="centrar">
        <h1 style="text-align:center; margin:0">Registro de nuevo usuario</h1>
        <form class="form form-horizontal">
            <div class="form-group">
                <label for="nombre" class="control-label">Nombre de usuario: </label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <input type="text" id="nombre" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contrasena" class="control-label">Contraseña: </label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </div>
                    <input type="text" id="contrasena" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="fechanac" class="control-label">Fecha de nacimiento: </label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></div>
                    <input type="text" id="fechanac" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="correo" class="control-label">Correo: </label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <input type="text" id="correo" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="numero_tarjeta" class="control-label">Número de tarjeta: </label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-tags" aria-hidden="true"></div>
                    <input type="text" id="numero_tarjeta" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="direccion" class="control-label">Dirección: </label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <input type="text" id="direccion" class="form-control">
                </div>
            </div>
            <p class="no-registrado">¿Ya tienes cuenta? <a class="btn-link" href="./iniciar_sesion.php">Ingresar</a></p>
            <div class="form-group boton">
                <input type="submit" class="btn btn-default comprar" value="Registrarse"></input>
            </div>
        </form>
    </div>
</body>

</html>
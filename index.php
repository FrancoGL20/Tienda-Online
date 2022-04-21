<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <!-- normalize -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap 3 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- icono a un lado del titulo de la página en la pestaña -->
    <link rel="shortcut icon" href="./img/logo.jpg">
    <!-- iconos de redes sociales -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- estilos -->
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
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
                    <a class="navbar-brand" href="#">Geek Store F</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <!-- menú izquierdo-->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Lista de productos</a></li>
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
                        <li><a href="./php/registro.php"><span class="glyphicon glyphicon-user"></span>Registrarse</a>
                        </li>
                        <li><a href="./php/iniciar_sesion.php"><span class="glyphicon glyphicon-log-in"></span>
                                Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- carrusel -->
    <div class="container-fluid" style="padding: 0;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./img/carrusel/b.jpg" alt="setup1">
                    <div class="carousel-caption">
                        <h3>Monitores</h3>
                        <p>y accesorios</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/a.jpg" alt="setup2">
                    <div class="carousel-caption">
                        <h3>Comodidad</h3>
                        <p>y confiabilidad</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/c.jpg" alt="setup3">
                    <div class="carousel-caption">
                        <h3>Al mejor precio</h3>
                        <p>ofertas todos los dias</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/d.jpg" alt="setup4">
                    <div class="carousel-caption">
                        <h3>Bienvenido</h3>
                        <p>a una tienda como tú</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- panel de texto o contenido -->
    <h3 class="container text-center" style="margin-bottom: .5em; margin-top: .5em;">Lista de articulos</h3>
    <!-- lista de productos -->
    <main class="principal">
        <!-- lista de productos automatica -->
        <?php
            // Crear una conexión
            $con = mysqli_connect("localhost","root","","tienda_online");

            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: ".mysqli_connect_error();
            }else{
                $result = mysqli_query($con,"SELECT * FROM producto;");
                //mio
                while($row = mysqli_fetch_array($result)) {
                    echo "
                    <div class=\"card text-center\">
                    <img class=\"card-img-top\" src=\"./img/productos/".$row['id_producto'].".png\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <hr class=\"solid\">
                        <div id=\"altura_caja\"><p class=\"card-text\">
                            ".$row['nombre_producto']."
                        </p></div>
                        <hr class=\"solid\">
                        <p class=\"card-text\">
                            ".$row['precio_producto']."
                        </p>
                    </div>
                    <a href=\"#\" class=\"btn btn-sm comprar\">Comprar</a>
                    </div>";
                }
                // cerrar conexión
                mysqli_close($con);
            }
        ?>
        
    </main>
    <!-- footer -->
    <div class="footer">
        <div class="container-fluid centrar_footer">
            <a href='#'><i class="fa fa-twitch fa-2x fa-fw"></i></a>
            <a href='#'><i class="fa fa-facebook fa-2x fa-fw"></i></a>
            <a href='#'><i class="fa fa-twitter fa-2x fa-fw"></i></a>
            <a href='#'><i class="fa fa-rss fa-2x fa-fw"></i></a>
            <a href='#'><i class="fa fa-vine fa-2x fa-fw"></i></a>
            <a href='#'><i class="fa fa-flickr fa-2x fa-fw"></i></a>
            <a href='#'><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
        </div>
    </div>
</body>

</html>

</html>
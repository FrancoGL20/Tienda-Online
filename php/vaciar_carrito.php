<?php
session_start();

if (!isset($_SESSION['sesion_personal'])) {
    header("Location: ./iniciar_sesion.php");
}

// Crear una conexión
$con = mysqli_connect("localhost", "root", "", "tienda_online");
    
// verificar connection con la BD
if (mysqli_connect_errno()) :
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
else:
    $result = mysqli_query($con, "DELETE FROM carrito;");

    // cerrar conexión
    mysqli_close($con);
    header('Location: ./carrito.php');
endif;
<?php
session_start();
if (!isset($_SESSION['sesion_personal'])) {
    header("Location: ./iniciar_sesion.php");
}
$id_producto=$_GET["id_producto"];
$cantidad_seleccionada=$_GET["cantidad"];
echo "id_producto=".$id_producto."<br>cantidad=".$cantidad_seleccionada;
$id_usuario=$_SESSION['sesion_personal']['id'];

$con = mysqli_connect("localhost", "root", "", "tienda_online");

// verificar connection con la BD
if (mysqli_connect_errno()) :
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
else:
    // disminuir el numero de elementos
    $result = mysqli_query($con, "SELECT cantidad_disponible FROM producto WHERE id_producto=$id_producto;");
    while ($row = mysqli_fetch_array($result)){
        $nueva_cantidad=((int)$row['cantidad_disponible']) - $cantidad_seleccionada;
    }
    $actualizacion_de_cantidad=mysqli_query($con,"UPDATE producto	SET cantidad_disponible=$nueva_cantidad WHERE id_producto=$id_producto;");
    
    // registrar la compra en el historial de compras
    date_default_timezone_set("America/Mexico_City");
    $fecha_actual=date("Y-m-d");
    $query="INSERT INTO historial_compras (id_usuario,id_producto,cantidad_comprada,fecha_compra) 
        VALUES ($id_usuario,$id_producto,$cantidad_seleccionada,'$fecha_actual');";
    $result = mysqli_query($con, $query);
    // cerrar conexión
    mysqli_close($con);
    header('Location: ./historial_individual.php');
endif;

function comprar(cantidad,id){
    var url="";
    url+="../php/comprar.php?cantidad=";
    url+=cantidad;
    url+="\&id_producto=";
    url+=id;
    window.location.replace(url);
}
function agregarAlCarrito(id){
    var cantidad_seleccionada=Number(document.getElementById("cantidad_seleccionada").value);
    var url="";
    url+="../php/agregar_al_carrito.php?cantidad=";
    url+=cantidad_seleccionada;
    url+="\&id_producto=";
    url+=id;
    window.location.replace(url);
}
function enviarAPantallaDeCompraUno(id){

    //     ../php/pantalla_de_compra.php?   arreglo[0]=subarreglo[cantidad]=1,subarreglo[id_producto]=3

    // 

    var cantidad_seleccionada=Number(document.getElementById("cantidad_seleccionada").value);
    var url="";
    url+="../php/pantalla_de_compra.php?cantidad=";
    url+=cantidad_seleccionada;
    url+="\&id_producto=";
    url+=id;
    window.location.replace(url);
}
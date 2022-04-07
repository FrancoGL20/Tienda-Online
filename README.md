# Tienda-Online
    El proyecto consta de una páginaCreación de una tienda online para Desarrollo Web.
### Estructura de la DB:
* Usuario:
    1. id_usuario **PK**
    2. nombre_usuario
    3. fecha_nacimiento
    4. correo_usuario
    5. contraseña
    6. numero_tarjeta
    7. direccion
* Carrito:
    1. id_usuario **FK**
    2. id_producto **FK**
* Producto:
    2. id_producto PK
    3. nombre_producto
    4. descripcion_producto
    5. imagen_producto
    6. cantidad_disponible
    7. precio_producto
    8. fabricante
    9. origen
* Historial_compras:
    1. id_historial PK
    2. id_usuario FK
    3. id_producto FK
    4. fecha_y_hora_compra
### Funcionamiento de la página

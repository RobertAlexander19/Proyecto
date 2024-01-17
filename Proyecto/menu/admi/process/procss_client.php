<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible"content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link rel="stylesheet" href="../style/style_productos.css"> 
</head> 
<body> 
    <nav> 
        <div class="logo"> 
            <img src="../../public/img/logo_menu.png" alt="Logo"> 
        </div> 
        <ul class="options"> 
        <li><a href="menu_admin.html"><img src="../../public/img/inicio.png" alt="inicio"><p>Inicio</p></a></li> 
        <li><a href="productos_admin.html"><img src="../../public/img/productos.png" alt="productos"><p>Productos</p></a></li> 
        <li><a href="ventas_admin.html"><img src="../../public/img/ventas.png" alt="ventas"><p>Ventas</p></a></li> 
        <li><a href="proveedores_admin.html"><img src="../../public/img/proveedores.png" alt="proveedores"><p>Proveedores</p></a></li> 
        <li><a href="reportes_admin.html"><img src="../../public/img/reportes.png" alt="reportes"><p>Reportes</p></a></li> 
        <li><a href="usuarios_admin.html"><img src="../../public/img/user.png" alt="usuario"><p>Usuario</p></a></li> 
        <li><a href="c"><img src="" alt="salir"></a></li> 
        </ul> 
    </nav> 
    <h1>Agregar Cliente</h1>
    <form  action="productos_admin.php" method="post" class="container">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" required>
        </div>
        <div class="form-group">
            <label>Stock:</label>
            <input type="number" name="stock" required>
        </div>
        <div class="form-group">
            <label>Categoría:</label>
            <input type="text" name="categoria" required>
        </div>
        <button type="submit" name="agregar_producto" class="btn btn-primary agregar">Agregar</button>
    </form>
    </body> 
</html> 
<?php
// Establecer conexión con la base de datos
require("../../BD/conect.php");
$conexion = conectar_bd();

// Agregar
if (isset($_POST['agregar_producto'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $query = "INSERT INTO productos (nombre, precio, stock, categoria) VALUES ('$nombre', '$precio', '$stock', '$categoria')";
    $result = $conexion->query($query);
}if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Cerrar conexión
$conexion->close();
?>
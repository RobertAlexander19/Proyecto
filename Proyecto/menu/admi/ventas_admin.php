<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto de venta</title>
    <link rel="stylesheet" href="style/style_ventas.css">
</head>
<body>
<nav>
        <div class="logo">
            <img src="../../public/img/logo_menu.png" alt="Logo">
        </div>
        <ul class="options"> 
            <li><a href="menu_admin.php"><img src="../../public/img/inicio.png" alt="inicio"><p>Inicio</p></a></li> 
            <li><a href="productos_admin.php"><img src="../../public/img/productos.png" alt="productos"><p>Productos</p></a></li> 
            <li><a href="ventas_admin.php"><img src="../../public/img/ventas.png" alt="ventas"><p>Ventas</p></a></li> 
            <li><a href="proveedores_admin.php"><img src="../../public/img/proveedores.png" alt="proveedores"><p>Proveedores</p></a></li> 
            <li><a href="reportes_admin.html"><img src="../../public/img/reportes.png" alt="reportes"><p>Reportes</p></a></li> 
            <li><a href="empleados_admin.php"><img src="../../public/img/empleados.png" alt="empleados"><p>Empleados</p></a></li> 
            <li><a href="../../login/"><img src="../../public/img/cerrar.png" alt="salir"><p>Cerrar</p></a></li> 
            </ul> 
    </nav>
    <h1>Ventas</h1>
    <div class="contenedor">
    <div class="div-left">
        <h1>Formulario</h1>
        <form action="guardar-venta.php" method="post">
        <label for="vendedor\_ci">CI Vendedor:</label>
        <input class="formulario" type="text" id="vendedor\_ci" name="vendedor\_ci" >
        <label for="cliente\_ci">CI Cliente:</label>
    <input class="formulario" type="text" id="cliente\_ci" name="cliente\_ci" >
    <label for="nombre">Nombre:</label>
    <input class="formulario" type="text" id="nombre" name="nombre" >

    <label for="fecha">Fecha:</label>
    <input class="formulario" type="date" id="fecha" name="fecha" >

    <label for="hora">Hora:</label>
    <input class="formulario" type="time" id="hora" name="hora" >

    <label for="producto">Producto:</label>
    <input class="formulario" type="text" id="producto" name="producto" >

    <label for="cantidad">Cantidad:</label>
    <input class="formulario" type="number" id="cantidad" name="cantidad" >

    <label for="metodos-pago">Métodos de pago:</label>
    <select id="metodos-pago" name="metodos-pago">
    <option value="efectivo">Efectivo</option>
    <option value="tarjeta de crédito">Tarjeta de crédito</option>
    <option value="tarjeta de débito">Tarjeta de débito</option>
    </select><br>

    <input  type="submit" value="Agregar cliente" class="boton"formaction="Process/procss_client.php">
    <input  type="button" value="Añadir al carrito" class="boton" id="agregar-producto">
    <input  type="reset" value="Limpiar" class="boton">

    </div>
    <div class="div-right">
        <h1>Carrito de compras</h1>
        <div class="tablas">
        <table>
            <thead>
            <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Disponibles</th>
        <th>Precio</th>
        <th>Subtotal</th>
            </tr>
            </thead>
            <tbody id="tabla-carrito">
            </tbody>
        </table>
        <h3>Total: $<span id="total-carrito">0</span></h3>
        </div>
        <div class="boton-derecha">
        <button class="boton">Finalizar Compra</button>
        </div>
    </div>
    </div>

    <div id="productos-espejo" class="productos-espejo">
  <center><h2>Selecciona un producto</h2></center>
  <table id="tabla-productos">
    <!-- Aquí irán los productos -->
  </table>
  <button id="agregar-producto-espejo" class="boton">Añadir</button>
</div>
<script src="js/script_ventas.js"></script>
</body>
</html>
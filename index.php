<?php
include 'config.php';


        $id_producto = 1; // Aquí debes reemplazarlo con el ID real del producto que estás mostrando
        $query = "SELECT * FROM productos WHERE id = $id_producto";
        $resultado = $conexion->query($query);


        // Verificar si se obtuvieron resultados
        if ($resultado->num_rows > 0) {
            // Obtener datos del producto
            $producto = $resultado->fetch_assoc();
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
        ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Tienda en Línea</h1>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Contacto</a>
    </nav>

<div class="producto">
        <img src="01.png" alt="" srcset="">
        <h2><?php echo $producto['nombre']; ?></h2>
        <p>Precio: $<?php echo $producto['precio']; ?></p>
        <p>Descripción: <?php echo $producto['descripcion']; ?></p>
        <button class="button">
 Shop now
 <svg class="cartIcon" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
</button>
    </div>
    


</body>
</html>

<?php
include 'conexion.php'; // Archivo donde se encuentra la conexión a la base de datos

$sql = "SELECT * FROM pedidos_productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos de Productos</title>
</head>
<body>
    <h2>Pedidos de Productos</h2>
    <table border="1">
        <tr>
            <th>ID Pedido</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_pedido"] . "</td>";
                echo "<td>" . $row["id_producto"] . "</td>";
                echo "<td>" . $row["cantidad"] . "</td>";
                echo "<td>" . $row["precio_unitario"] . "</td>";
                echo "<td>" . $row["subtotal"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay pedidos de productos registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>

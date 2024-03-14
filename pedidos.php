<?php
include 'config.php'; // Archivo donde se encuentra la conexión a la base de datos

$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h2>Pedidos</h2>
    <table border="1">
        <tr>
            <th>ID Pedido</th>
            <th>ID Usuario</th>
            <th>Fecha de Pedido</th>
            <th>Total</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["fecha_pedido"] . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay pedidos registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>

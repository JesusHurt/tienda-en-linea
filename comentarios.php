<?php
include 'conexion.php'; // Archivo donde se encuentra la conexión a la base de datos

$sql = "SELECT * FROM comentarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comentarios</title>
</head>
<body>
    <h2>Comentarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Producto</th>
            <th>ID Usuario</th>
            <th>Comentario</th>
            <th>Fecha</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_comentario"] . "</td>";
                echo "<td>" . $row["id_producto"] . "</td>";
                echo "<td>" . $row["id_usuario"] . "</td>";
                echo "<td>" . $row["comentario"] . "</td>";
                echo "<td>" . $row["fecha"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay comentarios disponibles</td></tr>";
        }
        ?>
    </table>
</body>
</html>

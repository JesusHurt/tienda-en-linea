<?php
include 'conexion.php'; // Archivo donde se encuentra la conexión a la base de datos

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>
<body>
    <h2>Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_usuario"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["rol"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay usuarios registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>

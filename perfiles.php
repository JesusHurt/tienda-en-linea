<?php
include 'config.php'; // Archivo donde se encuentra la conexión a la base de datos

$sql = "SELECT * FROM perfiles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfiles</title>
</head>
<body>
    <h2>Perfiles</h2>
    <table border="1">
        <tr>
            <th>ID Perfil</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_perfil"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["descripcion"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay perfiles registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>


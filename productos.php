<?php
// Obtener todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_producto"]. " - Nombre: " . $row["nombre"]. " - Precio: " . $row["precio"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>

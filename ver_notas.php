<?php
require('conexion.php');

// Mostrar los datos (puedes adaptar esto para cómo quieras procesar la información en PHP puro)
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila['id'] . " - Alumno: " . htmlspecialchars($fila['alumno']) . " - Materia: " . htmlspecialchars($fila['materia']) . " - Nota: " . $fila['nota'] . "<br>";
    }
} else {
    echo "No hay notas cargadas.";
}

$conexion->close();
?>
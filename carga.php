<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$inscripto = $_POST['inscripto'];

$sql = "INSERT INTO futbol (nombre,dni,edad,inscripto) VALUES ('$nombre', $dni, $edad, $inscripto)";

if($conexion->query($sql) === TRUE) {
    echo "Jugador cargado";
} else {
    echo "error" . $sql . $conexion->error;
}


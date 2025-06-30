<?php
// 
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'escuela';

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Consultar las notas
$sql = "SELECT * FROM notas ORDER BY alumno, materia";
$resultado = $conexion->query($sql);
?>
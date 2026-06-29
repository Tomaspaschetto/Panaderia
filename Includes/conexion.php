<?php

// Configuración de la conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "panaderia";

// Conecta con el servidor MySQL y selecciona la base de datos
$conn = mysqli_connect(
    $host,
    $usuario,
    $password,
    $base_datos
);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Configura la codificación UTF-8 para evitar problemas con acentos
mysqli_set_charset($conn, 'utf8mb4');

?>
<?php
$servername = 'localhost';
$username = 'root';
$password = '123456789';
$dbname = 'pfinal';

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset("utf8");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
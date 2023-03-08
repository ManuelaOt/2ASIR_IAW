<?php
// Conexión con la base de datos
$servername = "proyectofinal.c4dkyjxip4oz.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "usuario1";
$bd="proyectofinal";
// Crear la conexión
$conn = new mysqli($servername, $username, $password,$bd);

// Comprobar con
if ($conn->connect_error) {
    die("Conexión falla " . $conn->connect_error);
}
?>
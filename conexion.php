<?php
$servername = "localhost";
$username = "upso_proyecto";
$password = "upso";
$dbname = "proyecto";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

//echo "Conexión exitosa";
?>

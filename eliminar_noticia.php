<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "DELETE FROM noticia WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("Location: dashboard.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>Error eliminando registro: " . $conn->error . "</div>";
}
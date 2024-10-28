<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];  // Cambiado de 'nombre' a 'username'
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Encriptar la contraseña

    // Verificar si el usuario ya existe
    $sql_usuario = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql_usuario);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='alert alert-danger'>El usuario ya existe.</div>";
        exit;
    }

    // Insertar nuevo usuario
    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        header("Location: index.php");  // Redirigir a la lista de usuarios
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error al crear el usuario: " . $stmt->error . "</div>";
    }

    $stmt->close();
}
$conn->close();
?>
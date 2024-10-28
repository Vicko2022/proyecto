<?php
session_start();
include 'conexion.php'; 

// Inicializa una variable para el mensaje de error
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = $conn->query($sql);

    // Verifico que me esté trayendo un usuario
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Estoy asignando un usuario a la sesión
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $user['id'];
            $_SESSION['rol_id'] = $user['rol_id'];

            header("Location: dashboard.php");
            exit(); // Asegúrate de salir después de redirigir
        } else {
            $errorMessage = "Contraseña incorrecta";
        }
    } else {
        $errorMessage = "Usuario no encontrado";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Iniciar Sesión</title>
</head>
<body class="custom-background d-flex flex-column min-vh-100" style="background-color: #4A90E2;">
    <div class="container flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="card" style="max-width: 400px; width: 100%;">
            <div class="card-body text-center">
                <h1 class="mb-4">Iniciar sesión</h1>
                <?php if (!empty($errorMessage)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                    <div class="text-center mt-3">
                        <p>¿No tienes una cuenta? <a href="index.php">Registrarse</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-white text-center py-3" style="background-color: black; width: 100%; margin: 0;"> <!-- Fondo negro para el footer -->
        <p>© 2023 Tu Empresa. Todos los derechos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

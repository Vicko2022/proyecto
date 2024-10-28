<?php
include 'conexion.php';

$sql = "SELECT * FROM rol";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <title>Registro</title>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #4A90E2;"> 
    <div class="container flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="card" style="max-width: 400px; width: 100%;">
            <div class="card-body text-center"> <!-- Justificado al centro -->
                <h1 class="mb-4">Registrarse</h1>
                <form method="POST" action="register.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <select class="form-select" id="rol" name="rol" required>
                        <?php
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                            }
                          }
                        ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    <div class="text-center mt-3">
                        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-white text-center py-3" style="background-color: black; width: 100%; margin: 0;"> <!-- Fondo negro para el footer -->
        <p>© 

</html>

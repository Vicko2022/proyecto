<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crear Registro</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Crear Nuevo Registro</h2>
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>  
                <input type="text" class="form-control" id="username" name="username" required>  
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>  
                <input type="password" class="form-control" id="password" name="password" required> 
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">© 2023 Tu Nombre o Tu Empresa. Todos los derechos reservados.</p>
        <a href="#" class="text-white">Política de privacidad</a> | 
        <a href="#" class="text-white">Términos de servicio</a>
    </div>
</footer>
</html>
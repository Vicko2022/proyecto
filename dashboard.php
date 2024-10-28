<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM noticia WHERE autor_id = '$id'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el cuerpo ocupe al menos el 100% de la altura de la ventana */
        }
    </style>
    <title>Dashboard</title>
</head>

<body style="background-color: #f8f9fa;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: black;">Recorre Argentina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                   
                </ul>
                <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>

            </div>
        </div>
    </nav>

    <div class="container" style="flex: 1;"> <!-- Agregado flex: 1 para que el contenedor ocupe el espacio disponible -->
        <h2 class="my-4">Bienvenido, <?php echo $_SESSION['username']; ?></h2>
        <?php
        if ($result->num_rows == 0) {
            echo '<h6>No hay noticias para mostrar</h6>';
        } else {
            echo '
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
            while ($noticia = $result->fetch_assoc()) {
                echo "
                <tr>
                        <th >{$noticia['id']}</th>
                        <td>{$noticia['titulo']}</td>
                        <td>{$noticia['categoria_id']}</td>
                        <td>
                            <a href=\"eliminar_noticia.php?id={$noticia['id']}\">
                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                            </a>
                        </td>
                </tr>
                ";
            }

            echo '</tbody></table>';
        }
        ?>
        <a href="agregar_noticia.php" class="btn btn-primary" role="button" aria-disabled="true">Agregar Noticia</a>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">© 2023 Tu Nombre o Tu Empresa. Todos los derechos reservados.</p>
            <a href="#" class="text-white">Política de privacidad</a> | 
            <a href="#" class="text-white">Términos de servicio</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

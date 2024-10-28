<?php
include 'conexion.php';
session_start();

$sql = "SELECT * FROM noticia";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Recorre Argentina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    if ($_SESSION)
         echo '
            <nav class="navbar navbar-expand-lg" 
            style="background-color: #E9ECEF;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Recorre Argentina</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" 
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                        </li>
                    </ul>
                    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
        ';
    else
        echo '
    <nav class="navbar navbar-expand-lg" 
     style="background-color: #4A90E2; color: black;">
    <div class="container-fluid">
         <a class="navbar-brand" href="index.php">Recorre Argentina</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="welcome.php" style="color: black;">Noticias</a>
                   
                </li>
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#" style="color: black;">Provincias</a>
                </li>
            </ul>
            <a href="login.php" class="btn btn-outline-primary m-2" style="color: white; border-color: white;">Login</a>
            <a href="index.php" class="btn btn-outline-primary m-2" style="color: white; border-color: white;">Register</a>
        </div>
    </div>
</nav>
    '
    ?>
    <!-- Carrusel Principal -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1520356996640-d3b614727887?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fG1lbmRvemElMjB2aSVDMyVCMWVkb3N8ZW58MHx8MHx8fDA%3D"
                    class="d-block w-100" alt="..."
                    style="max-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block" style="bottom: 30%; text-align: center;">
                    <h5 style="font-size: 30px; color: black; font-weight: bold;">Mendoza</h5>
                    <p style="font-size: 25px; color: black; font-weight: bold;">Primavera.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1556918936-3e73b945d24f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHByb3ZpY25jaWElMjBkZSUyMGNvcmRvYmElMjBhcmdlbnRpbmF8ZW58MHx8MHx8fDA%3D"
                    class="d-block w-100" alt="..."
                    style="max-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block" style="bottom: 30%; text-align: center;">
                <h5 style="font-size: 30px; color: black; font-weight: bold;">Misiones</h5>
                <p style="font-size: 25px; color: black; font-weight: bold;">Cataratas.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1529414988992-52e2db9372b2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvdmljbmNpYSUyMGRlJTIwY29yZG9iYSUyMGFyZ2VudGluYXxlbnwwfHwwfHx8MA%3D%3D"
                    class="d-block w-100" alt="..."
                    style="max-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block" style="bottom: 30%; text-align: center;">
                <h5 style="font-size: 30px; color: black; font-weight: bold;">Santa Cruz</h5>
                <p style="font-size: 25px; color: black; font-weight: bold;">Glaciar Perito Moreno</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid" style="background-color: #4A90E2; padding: 20px 15px 40px 15px;">
    <h1>Recorriendo Argentina</h1>
    <div class="row p-5">

        <?php
        if ($result->num_rows == 0) {
            echo '<h6>No hay noticias para mostrar</h6>';
        } else {
            echo '<div class="row">';
            while ($noticia = $result->fetch_assoc()) {
                echo "
                <div class=\"col-12 col-sm-6 col-md-4\"> 
                    <div class=\"card\">
                        <img src=\"{$noticia['imagen_link']}\" class=\"card-img-top\" alt=\"Noticia\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{$noticia['titulo']}</h5>
                            <p class=\"card-text\">{$noticia['contenido']}</p>
                            <a href=\"#\" class=\"btn btn-primary\">Leer más...</a>
                        </div>
                    </div>
                </div>
                ";
            }
            echo '</div>';
        }
        ?>
    </div>
</div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
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
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería San José</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            🥖 Panadería San José
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#productos">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#estadisticas">Sistema</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-warning ms-3" href="login.php">
                        Ingresar
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<header class="hero">

    <div class="overlay">

        <div class="container text-center text-white">

            <h1 class="display-3 fw-bold">
                Sistema de Gestión para Panadería
            </h1>

            <p class="lead">
                Control de productos, ventas, stock y proveedores
            </p>

            <a href="login.php" class="btn btn-warning btn-lg">
                Acceder al Sistema
            </a>

        </div>

    </div>

</header>

<section id="productos" class="container py-5">

    <h2 class="text-center mb-5">
        Productos Destacados
    </h2>

    <div class="row">

        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="img/pan.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Pan Casero</h5>
                    <p>Pan recién horneado.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="img/facturas.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Facturas</h5>
                    <p>Variedad de facturas frescas.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="img/torta.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Tortas</h5>
                    <p>Pastelería artesanal.</p>
                </div>
            </div>
        </div>

    </div>

</section>

<section id="estadisticas" class="bg-light py-5">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">
                <h2>150+</h2>
                <p>Productos</p>
            </div>

            <div class="col-md-3">
                <h2>20+</h2>
                <p>Proveedores</p>
            </div>

            <div class="col-md-3">
                <h2>500+</h2>
                <p>Ventas</p>
            </div>

            <div class="col-md-3">
                <h2>24hs</h2>
                <p>Control del Negocio</p>
            </div>

        </div>

    </div>

</section>

<footer class="bg-dark text-white text-center p-4">

    <p class="mb-0">
        Sistema de Gestión para Panadería - Desarrollo de Software
    </p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
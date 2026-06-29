<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería San José</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/Estilos.css">
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

            <a href="login.php" class="btn btn-warning hero-btn">
                Acceder al Sistema
            </a>

        </div>

    </div>

</header>

<section id="productos" class="container py-5">

    <h2 class="text-center mb-5">
        Productos Destacados
    </h2>

<div class="row gx-4">

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="feature-image bread">Panadería</div>
                    <div class="card-body">
                        <h5>Pan Casero</h5>
                        <p>Controla productos frescos, precios y categorías desde un panel ordenado.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="feature-image pastry">Facturas</div>
                    <div class="card-body">
                        <h5>Facturas Dulces</h5>
                        <p>Administra inventario, proveedores y detalles para cada venta de repostería.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card h-100">
                    <div class="feature-image cake">Tortas</div>
                    <div class="card-body">
                        <h5>Tortas y Pasteles</h5>
                        <p>Organiza pedidos especiales con una interfaz clara y moderna.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

<section id="servicios" class="container py-5">

    <div class="text-center mb-5 section-heading">
        <h2>Funciones del Sistema</h2>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="service-card h-100">
                <div class="service-icon">📦</div>
                <h5>Gestión de Stock</h5>
                <p>Visualiza cantidades, controla entradas y salidas, y evita quiebres de inventario.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card h-100">
                <div class="service-icon">🧾</div>
                <h5>Ventas y Reportes</h5>
                <p>Registra ventas rápidamente y revisa la evolución del negocio en un solo lugar.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card h-100">
                <div class="service-icon">🤝</div>
                <h5>Proveedores</h5>
                <p>Mantén información de proveedores actualizada y gestiona entregas de forma ágil.</p>
            </div>
        </div>

    </div>

</section>

<section id="estadisticas" class="py-5">

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
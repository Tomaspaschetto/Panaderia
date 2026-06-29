<?php
session_start();

// Comprueba que haya una sesión de usuario activa
if(!isset($_SESSION["usuario"])){
    // Si no hay sesión, vuelve al login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Panel Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="text-center mb-0">
                Panel de Gestión - Panadería San José
            </h1>
            <!-- Muestra el nombre del usuario autenticado -->
            <p class="mb-0 text-muted">Usuario: <?= htmlspecialchars($_SESSION['nombre_completo'] ?? $_SESSION['usuario']) ?></p>
        </div>
        <div class="d-flex gap-2">
            <!-- Enlace para cerrar la sesión actual -->
            <a href="logout.php" class="btn btn-danger">
                Cerrar sesión
            </a>
            <a href="index.php" class="btn btn-secondary">
                Volver al Sitio
            </a>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Productos</h3>

                    <p>Administrar productos de la panadería.</p>

                    <a href="productos/listar.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Proveedores</h3>

                    <p>Administrar proveedores.</p>

                    <a href="proveedores/listar.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Ventas</h3>

                    <p>Registrar y consultar ventas.</p>

                    <a href="Ventas/historial.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Stock</h3>

                    <p>Controlar inventario.</p>

                    <a href="Stock/listarStock.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Reportes</h3>

                    <p>Consultar estadísticas.</p>

                    <a href="reportes.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
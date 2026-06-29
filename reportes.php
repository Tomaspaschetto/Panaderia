<?php

include("Includes/conexion.php");

// Obtiene métricas generales para los reportes
$totalProductos = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM productos WHERE activo = 1"));
$totalProveedores = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM proveedores WHERE estado = 1"));
$totalVentas = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM ventas"));
$totalStock = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(cantidad_actual) AS total FROM stock"));

?> 

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Reportes</h1>
    <div class="row g-4">
        <div class="col-md-3">
            <div class="stat-card text-center p-4">
                <h2><?= $totalProductos['total'] ?></h2>
                <p>Productos activos</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card text-center p-4">
                <h2><?= $totalProveedores['total'] ?></h2>
                <p>Proveedores activos</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card text-center p-4">
                <h2><?= $totalVentas['total'] ?></h2>
                <p>Ventas registradas</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card text-center p-4">
                <h2><?= $totalStock['total'] ?? 0 ?></h2>
                <p>Unidades en stock</p>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="dashboard.php" class="btn btn-secondary">Volver al Panel</a>
    </div>
</div>

</body>
</html>
<?php

include("../Includes/conexion.php");

// Consulta el historial de ventas junto con el nombre del usuario que registró cada venta
$sql = "SELECT v.id_venta, v.fecha, v.total, v.estado, u.usuario
        FROM ventas v
        LEFT JOIN usuarios u ON v.id_usuario = u.id_usuario
        ORDER BY v.fecha DESC";
$resultado = mysqli_query($conn, $sql);

?> 

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Estilos.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Historial de Ventas</h1>
            <p class="text-muted">Registros de ventas realizados por el sistema.</p>
        </div>
        <a href="agregarvent.php" class="btn btn-success">Nueva Venta</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($venta = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?= $venta['id_venta'] ?></td>
                            <td><?= $venta['fecha'] ?></td>
                            <td>$<?= number_format($venta['total'], 2) ?></td>
                            <td><?= htmlspecialchars($venta['estado']) ?></td>
                            <td><?= htmlspecialchars($venta['usuario'] ?: 'N/A') ?></td>
                            <td>
                                <a href="editarvent.php?id=<?= $venta['id_venta'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="eliminarvent.php?id=<?= $venta['id_venta'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta venta?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        <a href="../dashboard.php" class="btn btn-secondary">Volver al Panel</a>
    </div>
</div>

</body>
</html>
<?php

include("../Includes/conexion.php");

$sql = "SELECT s.id_stock, s.cantidad_actual, s.stock_minimo, s.sin_stock, s.ultima_actualizacion, p.nombre AS producto, p.categoria
        FROM stock s
        LEFT JOIN productos p ON s.id_producto = p.id_producto
        ORDER BY s.ultima_actualizacion DESC";

$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestión de Stock</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Estilos.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1>Gestión de Stock</h1>
            <p class="text-muted">Inventario actual y niveles de reposición.</p>
        </div>

        <a href="agregarStock.php" class="btn btn-success">
            Nuevo Registro
        </a>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-striped table-bordered align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Cantidad Actual</th>
                        <th>Stock Mínimo</th>
                        <th>Sin Stock</th>
                        <th>Actualizado</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($fila = mysqli_fetch_assoc($resultado)): ?>

                    <tr>
                        <td><?= $fila['id_stock'] ?></td>
                        <td><?= htmlspecialchars($fila['producto'] ?: 'Sin producto') ?></td>
                        <td><?= htmlspecialchars($fila['categoria'] ?: 'N/A') ?></td>
                        <td><?= $fila['cantidad_actual'] ?></td>
                        <td><?= $fila['stock_minimo'] ?></td>
                        <td><?= $fila['sin_stock'] ? 'Sí' : 'No' ?></td>
                        <td><?= $fila['ultima_actualizacion'] ?></td>
                        <td>
                            <a href="editarStock.php?id=<?= $fila['id_stock'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="eliminarStock.php?id=<?= $fila['id_stock'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar este registro de stock?')">Eliminar</a>
                        </td>
                    </tr>

                <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

    <div class="mt-3">

        <a href="../dashboard.php" class="btn btn-secondary">
            Volver al Panel
        </a>

    </div>

</div>

</body>
</html>
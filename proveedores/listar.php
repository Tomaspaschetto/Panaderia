<?php

include("../Includes/conexion.php");

// Recupera la lista de proveedores ordenada por nombre
$sql = "SELECT * FROM proveedores ORDER BY nombre ASC";
$resultado = mysqli_query($conn, $sql);

?> 

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Estilos.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Proveedores</h1>
            <p class="text-muted">Gestiona la lista de proveedores de la panadería.</p>
        </div>
        <a href="agregarprov.php" class="btn btn-success">Nuevo Proveedor</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($proveedor = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td><?= $proveedor['id_proveedor'] ?></td>
                                <td><?= htmlspecialchars($proveedor['nombre']) ?></td>
                                <td><?= htmlspecialchars($proveedor['telefono']) ?></td>
                                <td><?= htmlspecialchars($proveedor['email']) ?></td>
                                <td><?= htmlspecialchars($proveedor['direccion']) ?></td>
                                <td><?= $proveedor['estado'] ? 'Activo' : 'Inactivo' ?></td>
                                <td>
                                    <a href="editarprov.php?id=<?= $proveedor['id_proveedor'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="eliminarprov.php?id=<?= $proveedor['id_proveedor'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este proveedor?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="../dashboard.php" class="btn btn-secondary">Volver al Panel</a>
    </div>
</div>

</body>
</html>
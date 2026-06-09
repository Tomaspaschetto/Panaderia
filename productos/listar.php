<?php

include("../includes/conexion.php");

$sql = "SELECT * FROM productos WHERE activo = 1";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestión de Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Gestión de Productos</h1>

        <a href="agregar.php" class="btn btn-success">
            Nuevo Producto
        </a>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-striped table-bordered">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Fecha Alta</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                    <tr>

                        <td><?= $fila["id_producto"] ?></td>

                        <td><?= $fila["nombre"] ?></td>

                        <td><?= $fila["descripcion"] ?></td>

                        <td>$<?= $fila["precio"] ?></td>

                        <td><?= $fila["categoria"] ?></td>

                        <td><?= $fila["stock"] ?></td>

                        <td><?= $fila["fecha_alta"] ?></td>

                        <td>

                            <a
                                href="editar.php?id=<?= $fila['id_producto'] ?>"
                                class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a
                                href="eliminar.php?id=<?= $fila['id_producto'] ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Desea eliminar este producto?')">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php } ?>

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
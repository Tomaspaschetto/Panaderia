<?php

include("../Includes/conexion.php");

// Obtiene los productos activos para el selector del formulario
$productos = mysqli_query($conn, "SELECT id_producto, nombre FROM productos WHERE activo = 1 ORDER BY nombre ASC");
$error = '';

// Procesa el envío del formulario de nuevo stock
if (isset($_POST["guardar"])) {
    $id_producto = intval($_POST["id_producto"]);
    $cantidad_actual = intval($_POST["cantidad_actual"]);
    $stock_minimo = intval($_POST["stock_minimo"]);
    // Marca como sin stock si la cantidad es menor o igual al mínimo
    $sin_stock = $cantidad_actual <= $stock_minimo ? 1 : 0;

    $sql = "INSERT INTO stock (id_producto, cantidad_actual, stock_minimo, sin_stock) VALUES ($id_producto, $cantidad_actual, $stock_minimo, $sin_stock)";

    if (mysqli_query($conn, $sql)) {
        header("Location: listarStock.php");
        exit();
    }
    $error = 'Error al guardar el stock.';
}

?> 

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agregar Stock</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Estilos.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h2 class="mb-0">Agregar Stock</h2>
        </div>

        <div class="card-body">

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Producto</label>
                    <select name="id_producto" class="form-select" required>
                        <option value="">Seleccione un producto</option>
                        <?php while ($producto = mysqli_fetch_assoc($productos)): ?>
                            <option value="<?= $producto['id_producto'] ?>"><?= htmlspecialchars($producto['nombre']) ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad Actual</label>
                    <input type="number" name="cantidad_actual" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock Mínimo</label>
                    <input type="number" name="stock_minimo" class="form-control" required>
                </div>

                <button type="submit" name="guardar" class="btn btn-success">Guardar Stock</button>
                <a href="listarStock.php" class="btn btn-secondary">Cancelar</a>

            </form>

        </div>

    </div>

</div>

</body>

</html>
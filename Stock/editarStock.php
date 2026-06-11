<?php

include("../Includes/conexion.php");

$id = intval($_GET["id"]);

$sql = "SELECT s.*, p.nombre AS producto FROM stock s LEFT JOIN productos p ON s.id_producto = p.id_producto WHERE id_stock = $id";
$resultado = mysqli_query($conn, $sql);
$registro = mysqli_fetch_assoc($resultado);

$productos = mysqli_query($conn, "SELECT id_producto, nombre FROM productos WHERE activo = 1 ORDER BY nombre ASC");
$error = '';

if (isset($_POST["actualizar"])) {
    $id_producto = intval($_POST["id_producto"]);
    $cantidad_actual = intval($_POST["cantidad_actual"]);
    $stock_minimo = intval($_POST["stock_minimo"]);
    $sin_stock = $cantidad_actual <= $stock_minimo ? 1 : 0;

    $sql = "UPDATE stock SET id_producto = $id_producto, cantidad_actual = $cantidad_actual, stock_minimo = $stock_minimo, sin_stock = $sin_stock WHERE id_stock = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: listarStock.php");
        exit();
    }
    $error = 'Error al actualizar el stock.';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Stock</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Estilos.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2>Editar Stock</h2>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Producto</label>
                    <select name="id_producto" class="form-select" required>
                        <?php while ($producto = mysqli_fetch_assoc($productos)): ?>
                            <option value="<?= $producto['id_producto'] ?>" <?= $producto['id_producto'] == $registro['id_producto'] ? 'selected' : '' ?>><?= htmlspecialchars($producto['nombre']) ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad Actual</label>
                    <input type="number" name="cantidad_actual" class="form-control" value="<?= $registro['cantidad_actual'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock Mínimo</label>
                    <input type="number" name="stock_minimo" class="form-control" value="<?= $registro['stock_minimo'] ?>" required>
                </div>

                <button type="submit" name="actualizar" class="btn btn-warning">Actualizar</button>
                <a href="listarStock.php" class="btn btn-secondary">Volver</a>

            </form>

        </div>

    </div>

</div>

</body>
</html>
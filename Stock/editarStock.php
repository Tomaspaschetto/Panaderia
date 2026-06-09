<?php

include("../includes/conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM productos WHERE id_producto = $id";
$resultado = mysqli_query($conn, $sql);

$producto = mysqli_fetch_assoc($resultado);

if(isset($_POST["actualizar"])){

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $categoria = $_POST["categoria"];

    $sql = "UPDATE productos SET
            nombre='$nombre',
            descripcion='$descripcion',
            precio='$precio',
            stock='$stock',
            categoria='$categoria'
            WHERE id_producto=$id";

    mysqli_query($conn,$sql);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2>Editar Producto</h2>

            <form method="POST">

                <input
                    type="text"
                    name="nombre"
                    class="form-control mb-3"
                    value="<?= $producto['nombre'] ?>"
                    required>

                <textarea
                    name="descripcion"
                    class="form-control mb-3"><?= $producto['descripcion'] ?></textarea>

                <input
                    type="number"
                    step="0.01"
                    name="precio"
                    class="form-control mb-3"
                    value="<?= $producto['precio'] ?>"
                    required>

                <input
                    type="number"
                    name="stock"
                    class="form-control mb-3"
                    value="<?= $producto['stock'] ?>"
                    required>

                <input
                    type="text"
                    name="categoria"
                    class="form-control mb-3"
                    value="<?= $producto['categoria'] ?>"
                    required>

                <button
                    type="submit"
                    name="actualizar"
                    class="btn btn-warning">

                    Actualizar

                </button>

                <a href="listar.php" class="btn btn-secondary">
                    Volver
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>
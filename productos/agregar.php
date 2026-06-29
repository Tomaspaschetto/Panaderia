<?php

include("../Includes/conexion.php");

// Si se envía el formulario de agregar producto
if(isset($_POST["guardar"])){

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $categoria = $_POST["categoria"];
    $stock = $_POST["stock"];

    // Inserta el nuevo producto en la tabla productos
    $sql = "INSERT INTO productos
            (nombre, descripcion, precio, categoria, stock)
            VALUES
            ('$nombre', '$descripcion', '$precio', '$categoria', '$stock')";

    if(mysqli_query($conn, $sql)){
        // Después de guardar, vuelve al listado de productos
        header("Location: listar.php");
        exit();
    } else {
        echo "Error al guardar el producto.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agregar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h2 class="mb-0">Nuevo Producto</h2>

        </div>

        <div class="card-body">

            <form method="POST">

                <div class="mb-3">

                    <label class="form-label">Nombre</label>

                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Descripción</label>

                    <textarea
                        name="descripcion"
                        class="form-control"
                        rows="3"
                        required></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">Precio</label>

                    <input
                        type="number"
                        step="0.01"
                        name="precio"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Categoría</label>

                    <input
                        type="text"
                        name="categoria"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Stock</label>

                    <input
                        type="number"
                        name="stock"
                        class="form-control"
                        required>

                </div>

                <button
                    type="submit"
                    name="guardar"
                    class="btn btn-success">

                    Guardar Producto

                </button>

                <a
                    href="listar.php"
                    class="btn btn-secondary">

                    Cancelar

                </a>

            </form>

        </div>

    </div>

</div>

</body>

</html>
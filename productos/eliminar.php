<?php

include("../Includes/conexion.php");

// Obtiene el id del producto a eliminar desde la URL
$id = $_GET["id"];

// Elimina el producto de la tabla productos
$sql = "DELETE FROM productos
        WHERE id_producto = $id";

mysqli_query($conn,$sql);

// Vuelve al listado de productos después de eliminar
header("Location: listar.php");

?> 
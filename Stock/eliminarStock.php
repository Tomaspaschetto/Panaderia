<?php

include("../Includes/conexion.php");

// Obtiene el id del registro de stock a eliminar
$id = intval($_GET["id"]);

// Elimina el registro de stock
$sql = "DELETE FROM stock WHERE id_stock = $id";
mysqli_query($conn, $sql);

// Redirige al listado de stock
header("Location: listarStock.php");
exit();

?> 
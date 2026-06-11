<?php

include("../Includes/conexion.php");

$id = $_GET["id"];

$sql = "DELETE FROM productos
        WHERE id_producto = $id";

mysqli_query($conn,$sql);

header("Location: listar.php");

?>
<?php

include("../Includes/conexion.php");

$id = intval($_GET["id"]);

$sql = "DELETE FROM stock WHERE id_stock = $id";
mysqli_query($conn, $sql);

header("Location: listarStock.php");
exit();

?>
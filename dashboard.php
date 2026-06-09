<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Panel Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-5">
        Panel de Gestión - Panadería San José
    </h1>

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Productos</h3>

                    <p>Administrar productos de la panadería.</p>

                    <a href="productos/listar.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Proveedores</h3>

                    <p>Administrar proveedores.</p>

                    <a href="proveedores/listar.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Ventas</h3>

                    <p>Registrar y consultar ventas.</p>

                    <a href="ventas/historial.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Stock</h3>

                    <p>Controlar inventario.</p>

                    <a href="stock/listar.php"
                       class="btn btn-warning">
                        Ingresar
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <div class="card-body text-center">

                    <h3>Reportes</h3>

                    <p>Consultar estadísticas.</p>

    
<a href="Stock/listarStock.php"
   class="btn btn-warning">
    Ingresar
</a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["usuario"] = $_POST["usuario"];

    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-body">

                    <h3 class="text-center mb-4">
                        Iniciar Sesión
                    </h3>

                    <form method="POST">

                        <input
                            type="text"
                            name="usuario"
                            class="form-control mb-3"
                            placeholder="Usuario"
                            required>

                        <input
                            type="password"
                            name="password"
                            class="form-control mb-3"
                            placeholder="Contraseña"
                            required>

                        <button class="btn btn-warning w-100">
                            Ingresar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
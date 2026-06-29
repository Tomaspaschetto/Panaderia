<?php

session_start();

// Incluye la conexión a la base de datos para validar credenciales
include("Includes/conexion.php");

$error = '';

// Este bloque procesa el login cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);

    if (empty($usuario) || empty($password)) {
        // Mensaje mostrado si falta algún campo del login
        $error = 'Complete todos los campos.';
    } else {
        // Escapa el valor para prevenir inyección SQL
        $usuarioEsc = mysqli_real_escape_string($conn, $usuario);
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuarioEsc' LIMIT 1";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $passwordDb = $fila['contraseña'];

            // Comprueba la contraseña ingresada contra la base de datos.
            // Se acepta password hash (password_verify) o texto plano.
            if (password_verify($password, $passwordDb) || $password === $passwordDb) {
                // Genera un nuevo id de sesión para mayor seguridad
                session_regenerate_id(true);

                // Guarda datos del usuario autenticado en sesión
                $_SESSION['usuario'] = $fila['usuario'];
                $_SESSION['id_usuario'] = $fila['id_usuario'];
                $_SESSION['nombre_completo'] = $fila['nombre_completo'];

                // Redirige al panel principal después de iniciar sesión
                header("Location: dashboard.php");
                exit();
            }

            $error = 'Contraseña incorrecta.';
        } else {
            $error = 'Usuario no encontrado.';
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">

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

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

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
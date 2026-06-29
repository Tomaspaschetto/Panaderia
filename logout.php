<?php

session_start();

// Cierra la sesión del usuario actual
session_destroy();

// Redirige al formulario de login
header("Location: login.php");

exit();

?>
<?php
session_start();
session_destroy();
header("Location: ../index.html"); // Redirige a la página de inicio de sesión después de cerrar la sesión
?>

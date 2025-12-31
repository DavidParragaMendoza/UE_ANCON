<?php
session_start();
if (!isset($_SESSION['NOMBRE'])) {
    header("Location: ../login.php"); // Redirige a la página de inicio de sesión si no hay sesión activa
    exit();
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros UEA</title>
    <link rel="shortcut icon" href="../../IMG/favicon.png" type="image/x-icon">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
    <link rel="stylesheet" href="../../CSS/sistema/cuenta.css">

    <!--iconos-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!--tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>
<body>
   <header>
       <h1 style="text-transform: uppercase;">HOLA <?php echo $_SESSION['NOMBRE'] ?></h1> 
       <nav>
            <a href="./index.php" class="icons"><i class='bx bxs-home' ></i></a>
            <a href="./agregar_libros.php" class="icons"><i class='bx bxs-book-bookmark'></i></a>
            <!--<a href="" class="icons"><i class='bx bx-cog'></i></a>-->
            <a href="../Sign_off.php" class="icons"><i class='bx bx-power-off' ></i></a>    
    </nav>
   </header>
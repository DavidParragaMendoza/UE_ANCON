<?php
session_start();
if (!isset($_SESSION['NOMBRE'])) {
    header("Location: ../../login.php"); // Redirige a la página de inicio de sesión si no hay sesión activa
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración De Docentes</title>
    <link rel="shortcut icon" href="../../../IMG/favicon.png" type="image/x-icon">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
    <link rel="stylesheet" href="../../../CSS/sistema/crud.css">

    <!--iconos-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!--tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

     <!-- ALERTA -->
    <script type="text/javascript">
        function confirmar(){
        return confirm('¿Estas seguro que quieres realizar esta acción.?');
        }
    </script>


</head>
<body>
    <header>
        <h3>Administración De Docentes</h3>
        <nav>
            <a href="../index.php" class="icons"><i class='bx bxs-home' ></i></a>
            <a href="./index.php"  class="icons"><i class='bx bxs-group'></i></i></a>
            <a href="./docente_delete.php" class="icons"><i class='bx bxs-user-x' ></i></a>
            <a href="./create_doc.php" class="icons"><i class='bx bxs-user-plus' ></i></a>
        </nav>
    </header>
    

   
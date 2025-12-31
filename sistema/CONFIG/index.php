<?php 
session_start();
if (!isset($_SESSION['NOMBRE'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="shortcut icon" href="../../IMG/favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../CSS/sistema/administracion.css">
     <!--tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

</head>

<body>

<div class="contenedor">
    <section class="acciones">
        <div class="username">
            <i class='bx bxs-user-circle' ></i>
            <h4> <?php echo $_SESSION['NOMBRE'] ?> </h4>
        </div>
        <div class="username">
            <i class='bx bx-power-off' style="font-size: 30px; font-weight: 500;"></i>
                <a href="../Sign_off.php">
                    <h4> REGRESAR </h4>
                </a>
        </div>
    </section>

    <section class="card">        
        <a href="./Libros">
            <div class="item item--1">
                <i class='bx bxs-book-bookmark' style="font-size: 80px;"></i> 
                <span class="text text--1">Ver Libros</span>
            </div>
        </a>

        <a href="./Usuarios">
            <div class="item item--2">     
                <i class='bx bx-id-card' style="font-size: 80px;"></i> 
                <span class="text text--2">Ver Usuarios</span>
            </div>
        </a>

        <a href="./Docentes">
            <div class="item item--1">     
                <i class='bx bxs-institution' style="font-size: 80px;"></i> 
                <span class="text text--1">Ver Docentes</span>
            </div>
        </a>
    </div>        
</section>
   
</body>
</html>
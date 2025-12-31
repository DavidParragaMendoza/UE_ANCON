<?php
    include("../../sistema/conexion/bd.php");
    $asignatura=$_GET['ID'];
    $sql="SELECT * FROM `libros` WHERE MATERIA='$asignatura';";
    $Resultado= mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="frame-src 'self' https://drive.google.com;">
    <title>Libros UEA</title>
    <link rel="shortcut icon" href="../../IMG/favicon.png" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="../../CSS/Libros/cuenta.css">
    <link type="text/css" rel="stylesheet" href="../../CSS/normalize.css">

    <!--tipografia-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    
    <!--iconos-->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header>
        <h3>Libros De <?php echo $asignatura ?></h3>
        <nav>
            <a href="./index.php" class="icons"><i class='bx bxs-home' ></i></a>           
        </nav>
    </header>
  
    <main>
        <section class="content">
            <?php
            if ($Resultado) {
            while ($row = $Resultado->fetch_array()) {
            ?>
        
            <article>
                <iframe  src="https://drive.google.com/file/d/<?php ECHO $row['LIBRO_ID']?>/preview" width="400" height="500"></iframe>
                    
                    <h2><span style="color: #004cff;">Materia:</span> <?php ECHO $row['MATERIA']?></h2>
                    <h2><span style="color: #004cff;">Año:</span> <?php ECHO $row['ANO']?></h2>  
                
                    <a  href="<?php ECHO $row['RUTA']?>" target="_blank">
                        <button class="Btn">
                            <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
                            <span class="icon2"></span>
                            <span class="tooltip">Descargar!</span>
                        </button>    
                    </a>
            </article>
            
        <?php  }  }    ?>
        </section>
    </main>
</body>
</html>



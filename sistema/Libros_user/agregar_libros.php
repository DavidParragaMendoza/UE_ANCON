<?php
    include("../../sistema/conexion/bd.php");
    $sql = "SELECT DISTINCT materia FROM libros;";
    $Resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros UEA</title>
    <link rel="shortcut icon" href="../../IMG/favicon.png" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="../../CSS/Libros/style.css">
    <link type="text/css" rel="stylesheet" href="../../CSS/normalize.css">

    <!--tipografia-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    
    <!--iconos-->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
  <main>
    <h2 class="text-center fw-bold">
      <a href="./index.php">
        <i class='bx bxs-home' style="font-size: 34px;margin: 10px; color: black;"></i>
      </a>
      Guarda El Libro De La Materia Que Desees
  </h2>
  
  <div class="hr-line mt-4 mb-4"></div>
    <section>  
      <?php
        if ($Resultado) {
          while ($row = $Resultado->fetch_array()) {
      ?>
        <a href="./fav_libro2.php?ID=<?php ECHO $row['materia']?>" style="text-decoration: none; color: #454646; ">
          <div class="buttons">  
            <button class="neumorphic">
              <span> <?php echo $row['materia']; ?></span>
            </button>
          </div>
        </a>
      <?php  }  }    ?>
  </section>      
</main>
</body>  
</html>





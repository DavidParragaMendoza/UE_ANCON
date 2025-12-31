<?php
include("../../sistema/conexion/bd.php");

$sql = "SELECT * FROM `profesor` WHERE ESTADO='1' AND CARGO='RECTOR' OR CARGO='VICERRECTOR-MATUTINA' OR CARGO='VICERRECTOR-VESPERTINA'";
$Resultado = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM `profesor` WHERE ESTADO='1' AND CARGO='SECRETARIO' OR CARGO='PSICOLOGA'";
$Resultado2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM `profesor` WHERE ESTADO='1' AND CARGO='DOCENTE'";
$Resultado3 = mysqli_query($conn, $sql3);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIDAD EDUCATIVA ANCÓN</title>
    <link rel="shortcut icon" href="../../IMG/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Personal/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  
  <header>
    <a  href="../../index.html" style="text-decoration: none;color: gray;" with="50%">
      <i class='bx bxs-home' style="font-size: 34px;margin: 10px;"></i>
    </a>
    <h1>NUESTRO PERSONAL DOCENTE 2023-2024</h1>
  </header>
    
<main>
  
  <section class="sect1">
    <div class="contenedor">
      <H3 class="fade-in">MAXIMAS AUTORIDADES</H3>
      <?php     if ($Resultado) { while ($row = $Resultado->fetch_array()) { ?>  
      <div class="contenedor2 fade-in">
      <div class="card">
          <div class="profile-pic"> 
          <img src="../../sistema/CONFIG/Docentes/foto_perfil/<?php echo $row['FOTO'] ?>" alt="" width="100px" loading="lazy" onerror="this.src='./img.png'">

              </div>
              
              <div class="bottom">
                
            <div class="content">
              
              <span class="name"><?php echo $row['NOMBRE']." ".$row['APELLIDO'] ?></span>
              <span class="about-me"><?php echo $row['CARGO']?> DE UEA</span>
              
              </div>
              
              <div class="bottom-bottom">
                <div class="nombre">
                  <?php echo $row['NOMBRE']." ".$row['APELLIDO'] ?>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          
          <?php  }  }    ?>
          
        </div>
    </section>

    <br>

    <section class="sect2">
    <div class="contenedor">
      <H3 class="fade-in">SECRETARIA Y DECE</H3>
      <?php     if ($Resultado2) { while ($row2 = $Resultado2->fetch_array()) { ?>  
      <div class="contenedor2 fade-in">
      <div class="card fade-in">
          <div class="profile-pic"> 
          <img src="../../sistema/CONFIG/Docentes/foto_perfil/<?php echo $row2['FOTO']?>" alt="" width="100px" loading="lazy" onerror="this.src='./img.png'">

              </div>
              
              <div class="bottom">
                
            <div class="content">
              
              <span class="name"><?php echo $row2['NOMBRE']." ".$row2['APELLIDO'] ?></span>
              <span class="about-me"><?php echo $row2['CARGO']?> DE UEA</span>
              
              </div>
              
              <div class="bottom-bottom">
                <div class="nombre">
                  <?php echo $row2['NOMBRE']." ".$row2['APELLIDO'] ?>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          
          <?php  }  }    ?>
          
        </div>
    </section>


    <section class="sect3">
      <H3 class="fade-in">PROFESORES UEA</H3>
    <div class="contenedor3">
    
      <?php     if ($Resultado3) { while ($row3 = $Resultado3->fetch_array()) { ?>  
      <div class="contenedor">
      <div class="card fade-in">
          <div class="profile-pic"> 
              <img src="../../sistema/CONFIG/Docentes/foto_perfil/<?php echo $row3['FOTO']?>" alt="foto_perfil" width="100px" loading="lazy" onerror="this.src='./img.png'">
              </div>
              
              <div class="bottom">
                
            <div class="content">
              
              <span class="name"><?php echo $row3['NOMBRE']." ".$row3['APELLIDO'] ?></span>
              <span class="about-me"><?php echo $row3['CARGO']?> DE UEA</span>
              
              </div>
              
              <div class="bottom-bottom">
                <div class="nombre">
                  <?php echo $row3['NOMBRE']." ".$row3['APELLIDO'] ?>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          
          <?php  }  }    ?>
          
        </div>
    </section>
    
</main>
<footer>
<script src="../../JS/scrolls.js"></script>
</footer>
</body>
</html>
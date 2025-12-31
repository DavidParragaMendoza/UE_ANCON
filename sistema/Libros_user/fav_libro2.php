<?php
  include("./header.php");
  include("../conexion/bd.php");

    //datos del libro
      $asignatura = $_GET['ID'];
      $datos_libros = "SELECT * FROM `libros` WHERE MATERIA='$asignatura'";
      $Resultado = mysqli_query($conn, $datos_libros);
      

    //datos del usuario
     
        $usuario= $_SESSION['NOMBRE'];
        $datos_usuarios="SELECT * FROM `usuarios` WHERE USUARIO='$usuario'";
        $resultado =mysqli_query($conn, $datos_usuarios); 
        $datos2=mysqli_fetch_assoc($resultado);
        $USER_ID    = $datos2['ID'];
        $NOMBRE     =$datos2['NOMBRE'];
        $APELLIDO   =$datos2['APELLIDO'];
        $FOTO       =$datos2['FOTO'];
        $USUARIO    =$datos2['USUARIO'];
        $CONTRASENA =$datos2['CONTRASENA'];
        $ROL        =$datos2['ROL'];
?>

<main>
    <section class="content">   
        <?php
            if ($Resultado) {
            while ($row = $Resultado->fetch_array()) {
        ?> 
        <article>
           
           <iframe  src="https://drive.google.com/file/d/<?php ECHO $row['LIBRO_ID']?>/preview" width="400" height="500"></iframe>

           <h2><span style="color: #004cff;">Materia: </span><?php ECHO $row['MATERIA']?></h2>
           <h2><span style="color: #004cff;">Año: </span><?php ECHO $row['ANO']?></h2>
           <?php           
            $ID_LIBRO       =$row['ID'];
            $MATERIA        =$row['MATERIA'];
            $ANO            =$row['ANO'];
            $NOMBRE         =$row['NOMBRE'];
            $RUTA           =$row['RUTA'];
            $CLAVE_LIBRO    =$row['LIBRO_ID'];
            $ESTADO         =$row['ESTADO'];
           ?>

            <?php

            $libro_fav = "SELECT * FROM `libro_fav` WHERE USUARIO='$USER_ID' AND LIBRO='$ID_LIBRO'";

            $resul=mysqli_query($conn, $libro_fav); 

            $datos3=mysqli_fetch_assoc($resul);

            $LIBRO_FAV_ID   = isset($datos3['ID']) ? $datos3['ID'] : null;
            $USUARIO_FAV    = isset($datos3['USUARIO']) ? $datos3['USUARIO'] : null;
            $LIBRO_FAV      = isset($datos3['LIBRO']) ? $datos3['LIBRO'] : null;
            $ESTADO_FAV     = isset($datos3['ESTADO']) ? $datos3['ESTADO'] : null;


            if ($ESTADO_FAV == '1') { ?>
            <form action="" method="post">
                <!--formulario del dislike-->
                <label for="libro_fav_id">
                    <input type="hidden" name="libro_fav_id" id="libro_fav_id" value="<?php echo $LIBRO_FAV_ID ?>">
                </label>

                <label for="usuario_id">
                    <input type="hidden" name="usuario_id" id="usuario_id" value="<?php echo $USUARIO_FAV ?>">
                </label>

                <label for="libro_fav">
                    <input type="hidden" name="libro_fav" id="libro_fav" value="<?php echo $LIBRO_FAV ?>">
                </label>

                <label for="estado_fav">
                    <input type="hidden" name="estado_fav" id="estado_fav" value="<?php echo $ESTADO_FAV ?>">
                </label>

                <button class="button-like" type="submit" name="Dislike">
                    <i class='bx bxs-heart' style='color:#fd0404'  ></i>
                </button>
            </form>


            <?php } elseif ($ESTADO_FAV == '0') { ?>
                <form action="" method="post">
                <!--formulario del dislike-->
                <label for="libro_fav_id">
                    <input type="hidden" name="libro_fav_id" id="libro_fav_id" value="<?php echo $LIBRO_FAV_ID ?>">
                </label>

                <label for="usuario_id">
                    <input type="hidden" name="usuario_id" id="usuario_id" value="<?php echo $USUARIO_FAV ?>">
                </label>

                <label for="libro_fav">
                    <input type="hidden" name="libro_fav" id="libro_fav" value="<?php echo $LIBRO_FAV ?>">
                </label>

                <label for="estado_fav">
                    <input type="hidden" name="estado_fav" id="estado_fav" value="<?php echo $ESTADO_FAV ?>">
                </label>

                <button  class="button-like" type="submit" name="like2">
                    <i class='bx bxs-heart'></i>
                </button>
            </form>


            <?php
            }else { ?>

            
            <form action="" method="post">
                <!--formulario del like-->
                
                <label for="usuario">
                    <input type="hidden" name="usuario" id="usuario" value="<?php echo $USER_ID ?>">
                </label>

                <label for="libro">
                    <input type="hidden" name="libro" id="libro" value="<?php echo $ID_LIBRO?>">
                </label>

                <button class="button-like" type="submit" name="like">
                <i class='bx bxs-heart'></i>
                </button>
            </form>


            <?php
            }
            ?>
                      
       </article>
        
       <?php  }  }    ?>
        </article>
    </section>

</main>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Dislike'])) {
            $ID         = $_POST['libro_fav_id'];
            $USUARIO    = $_POST['usuario_id'];
            $PDF        = $_POST['libro_fav'];
            
            $consulta="UPDATE `libro_fav` SET `ESTADO`='0' WHERE `ID`='$ID'";
            $resultado= mysqli_query($conn,$consulta);
            

            if ($resultado) {   
                echo "<script> window.alert('EL LIBRO SE QUITO DE TUS FAVORITOS.'); window.location.href = './agregar_libros.php'; </script>";
            

            } else {
                echo "<script> window.alert('ERROR: LIBRO NO SE ELIMINO.'); </script>";
            }

    } 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['like2'])) {
        $ID         = $_POST['libro_fav_id'];
        $USUARIO    = $_POST['usuario_id'];
        $PDF        = $_POST['libro_fav'];
        
        $consulta="UPDATE `libro_fav` SET `ESTADO`='1' WHERE `ID`='$ID'";
        $resultado= mysqli_query($conn,$consulta);
        

        if ($resultado) {   
            echo "<script> window.alert('EL LIBRO SE AGREGO DE TUS FAVORITOS.'); window.location.href = './agregar_libros.php'; </script>";
        

        } else {
            echo "<script> window.alert('ERROR: LIBRO NO SE PUDO AGRGAR.'); </script>";
        }

} 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['like'])) {
        
        $USUARIO_ID = $_POST['usuario'];
        $PDF        = $_POST['libro'];
        
//        $consulta2="INSERT INTO `libro_fav`(`USUARIO`, `LIBRO`, `ESTADO`) VALUES ('$USUARIO_ID','$PDF','1')";
        $consulta2="INSERT INTO `libro_fav`(`USUARIO`, `LIBRO`, `ESTADO`) VALUES ('$USUARIO_ID','$PDF','1')";

        $resultado2= mysqli_query($conn,$consulta2);
        

        if ($resultado2) {   
            echo "<script> window.alert('EL LIBRO SE AGREGO A TUS FAVORITOS.'); window.location.href = './agregar_libros.php'; </script>";
        } else {
            echo "<script> window.alert('ERROR: LIBRO NO SE AGREGO.'); </script>";
        }
    } 
mysqli_close($conn);
?>
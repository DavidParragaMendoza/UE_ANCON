<?php
    include("./header.php");
    include("../conexion/bd.php");


    $usuario= $_SESSION['NOMBRE'];
    $select = "SELECT lf.ID AS ID_Libro_Fav,
                u.ID AS ID_Usuario,
                u.NOMBRE AS Nombre_Usuario,
                u.APELLIDO AS Apellido_Usuario,
                u.FOTO AS Foto_Usuario,
                u.USUARIO AS Nombre_Usuario,
                u.CONTRASENA AS Contraseña_Usuario,
                u.ROL AS Rol_Usuario,
                u.ESTADO AS Estado_Usuario,
                l.ID AS ID_Libro,
                l.MATERIA AS Materia_Libro,
                l.ANO AS Ano_Libro,
                l.LIBRO_ID AS Nombre_Libro,
                lf.ESTADO AS Estado_Libro_Fav
            FROM libro_fav lf
            JOIN usuarios u ON lf.USUARIO = u.ID
            JOIN libros l ON lf.LIBRO = l.ID
            WHERE lf.ESTADO = '1' AND u.USUARIO = '$usuario'";

    $Resultado2 = mysqli_query($conn, $select);
?>
 
    <main>
        <section class="content">
        <?php
            if ($Resultado2) {
            while ($row = $Resultado2->fetch_array()) {
        ?>
            <article>
           
                <iframe  src="https://drive.google.com/file/d/<?php ECHO $row['Nombre_Libro']?>/preview" width="400" height="500"></iframe>

                <h2>Materia: <?php ECHO $row['Materia_Libro']?></h2>
                <h2>Año: <?php ECHO $row['Ano_Libro']?></h2>
                <i class='bx bxs-heart' style='color:#fd0404'  ></i>

                       
            </article>
        
        <?php  
            }  
            }    
        ?>
        </section>
    </main>

</body>
</html>
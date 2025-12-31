<?php
include("../../conexion/bd.php");

if (isset($_POST['Enviar'])) { 
        $ID         = $_POST['id'];
        $materia    = $_POST['materia'];
        $año        = $_POST['año'];
        $libro      =$_FILES["libro"]['name'];
        
       
        $consulta="UPDATE libros SET MATERIA='$materia', ANO='$año', ESTADO='1' WHERE `ID`='$ID' ";
        $resultado= mysqli_query($conn,$consulta);


        $fecha=new DateTime();
            $nombreArchivo_libro=($libro!='')?$fecha->getTimestamp()."_".$_FILES["libro"]['name']:"";
            $tmp_libro = $_FILES["libro"]['tmp_name'];
            
            if ($tmp_libro!='') {
                move_uploaded_file($tmp_libro,"./PDF/".$nombreArchivo_libro);
                $sql="SELECT LIBRO FROM libros WHERE ID='$ID' ";      
                $registro_recuperado= mysqli_query($conn, $sql);
            
                if ($registro_recuperado) {
                    $PDF = mysqli_fetch_assoc($registro_recuperado);

                    if (isset($PDF["LIBRO"]) && $PDF["LIBRO"]!="") {
                    
                        if (file_exists("./PDF/".$PDF["LIBRO"])) {
                            unlink("./PDF/".$PDF["LIBRO"]);
                        }
                    }
                }

                $consulta="UPDATE libros SET LIBRO='$nombreArchivo_libro' WHERE ID='$ID'";
                $resultado= mysqli_query($conn,$consulta);
            }

        if ($resultado) {   
            echo "<script> window.alert('LIBRO EDITADO CORRECTAMENTE.'); window.location.href = './index.php'; </script>";
         

        } else {
            echo "<script> window.alert('ERROR: LIBRO NO EDITADO CORRECTAMENTE.'); </script>";
        }

}else{
        $ID=$_GET['ID'];

        $sql="SELECT * FROM `libros` WHERE ID='$ID'";
        
        $resultado=mysqli_query($conn, $sql); 
        
        $datos=mysqli_fetch_assoc($resultado);
        $ID         = $datos['ID'];
        $MATERIA    =$datos['MATERIA'];
        $ANO        =$datos['ANO'];
        $LIBRO      =$datos['LIBRO'];
        
        mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link rel="shortcut icon" href="../../../IMG/favicon.png" type="image/x-icon">
</head>
<body>
    <main>
        <section>
            <fieldset>
                <legend>Agregar Un Nuevo Libro</legend>
                <form action="" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                <div>
                    <input type="text" name="id" id="id"  value="<?php echo $ID ?>">
                </div> 
                    
                    <div>
                        <datalist id="materias">
                            <option value="Inglés"></option>
                            <option value="Ciencias naturales"></option>
                            <option value="Lengua y literatura"></option>
                            <option value="Matemáticas"></option>
                            <option value="Estudios sociales"></option>
                            <option value="Educación cultural y artística"></option>
                            <option value="Química"></option>
                            <option value="Historia"></option>
                            <option value="Filosofía"></option>
                            <option value="Educación para la ciudadanía"></option>
                            <option value="Física"></option>
                            <option value="Biología"></option>
                            <option value="Emprendimiento y gestión"></option>
                        </datalist>
                            <label for="materia">
                                Escriba A Que Materia Corresponde
                                <input list="materias" name="materia" id="materia" placeholder="Matemáticas" required  value="<?php echo $MATERIA ?>">
                            </label>   
                    </div>    
                    
                    <div>
                        <datalist id="años">
                            <option value="8vo"></option>
                            <option value="9no"></option>
                            <option value="10mo"></option>
                            <option value="1ero"></option>
                            <option value="2do"></option>
                            <option value="3ero"></option>
                        </datalist>
                            <label for="año">
                                Escriba A Que Año Corresponde
                                <input list="años" name="año" id="año" required  value="<?php echo $ANO ?>">
                            </label>   
                    </div>
                    
                    <div>
                    <a href="./PDF/<?php echo $LIBRO ?>" target="_blank">
                        <img src="../../../IMG/SVG/ver_libro.svg" alt="Ver Libro">
                    </a><br>
                    
                        <label for="libro">Seleccione El Archivo Correspondiente Al Libro
                            <input type="file" name="libro" id="libro">
                        </label>
                    </div>


                    <button type="submit" name="Enviar" id="Enviar"><img src="../../../IMG/SVG/update.svg" alt="Subir Libro"></button>
                    <a href="./index.php"><img src="../../../IMG/SVG/cancelar.svg" alt="Cancelar"></a>

                </form>
            </fieldset>
        </section>
    </main>
</body>
</html>

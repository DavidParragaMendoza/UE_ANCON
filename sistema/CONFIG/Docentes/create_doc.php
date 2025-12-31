<?php
    include("../../conexion/bd.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar Docente</title>
        <link rel="shortcut icon" href="../../../IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../../../CSS/sistema/crear.css">
        
        <!--iconos-->
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <!--tipografia-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    </head>

<body>
    <main>
        <form  class="form" action="" method="post" enctype="multipart/form-data">
            <span class="title">Datos Del Docente</span>
        
            <input id="file" type="file" name="fotito">
                <label class="avatar" for="file">
                    <span> 
                        <i class='bx bxs-photo-album' style="font-size: 50px;"></i>
                    </span>
                </label>
        
            <label for="nombre">Nombres completos:</label> 
                <input class="input" type="text" name="nombre" id="nombre" placeholder="Ronald David" required>
            <label for="apellido">Apellidos completos:</label> 
                <input class="input" type="text" name="apellido" id="apellido" placeholder="Parraga Mendoza" required>
            <label for="cargo">Cargo:</label>
                <input class="input" type="text" name="cargo" id="cargo" placeholder="Profesor" required >
        
            <div style="display: flex; justify-content: space-between;">
                <button type="submit" name="Crear" id="Crear"><i class='bx bxs-save' style="font-size: 30px;"></i></button>
                <a class="regresar" href="./index.php"><i class='bx bx-undo'></i></a> 
            </div>
        </form>
    </main>
</body>
</html>

<?php
    if (isset($_POST['Crear'])) {
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];
        $foto       =$_FILES["fotito"]['name'];
        $cargo      = $_POST['cargo'];

            if ($foto != '') {
                $fecha = new DateTime();
                $nombreArchivo_foto = $fecha->getTimestamp() . "_" . $_FILES["fotito"]['name'];
                $tmp_foto = $_FILES["fotito"]['tmp_name'];
                    if (move_uploaded_file($tmp_foto, "./foto_perfil/" . $nombreArchivo_foto)) {
                        $consulta ="INSERT INTO `profesor`(`NOMBRE`, `APELLIDO`, `FOTO`, `CARGO`, `ESTADO`) VALUES ('$nombre','$apellido','$nombreArchivo_foto','$cargo','1')";
                        $resultado= mysqli_query($conn,$consulta);
                        echo "<script>alert('Te has inscrito correctamente.'); window.location.href = './index.php';</script>";
                    } else {
                        echo "<script>alert('Error: No te has inscrito correctamente.');</script>";
                    }
            }else {                
                $consulta ="INSERT INTO `profesor`(`NOMBRE`, `APELLIDO`, `CARGO`, `ESTADO`) VALUES ('$nombre','$apellido','$cargo','1')";
                $resultado = mysqli_query($conn, $consulta);
            
                if ($resultado) {
                    echo "<script>alert('Te has inscrito correctamente.'); window.location.href = './index.php';</script>";
                } else {
                    echo "<script>alert('Error: No te has inscrito correctamente.');</script>";
                }
            }
    }
?>
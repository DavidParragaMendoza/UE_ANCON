<?php
include("../../conexion/bd.php");

if (isset($_POST['Actualizar'])) { 
    $ID         = $_POST['id'];
    $foto       =$_FILES["fotito"]['name'];
    $nombre     = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    $Cargo    = $_POST['Cargo'];

    $consulta="UPDATE profesor SET `NOMBRE`='$nombre',`APELLIDO`='$apellido',`CARGO`='$Cargo',`ESTADO`='1' WHERE ID='$ID'";
    $resultado= mysqli_query($conn,$consulta);

    $fecha=new DateTime();
    $nombreArchivo_foto=($foto!='')?$fecha->getTimestamp()."_".$_FILES["fotito"]['name']:"";
    $tmp_foto = $_FILES["fotito"]['tmp_name'];

    if ($tmp_foto!='') {
        move_uploaded_file($tmp_foto,"./foto_perfil/".$nombreArchivo_foto);
        $sql="SELECT FOTO FROM profesor WHERE ID='$ID' ";      
        $registro_recuperado= mysqli_query($conn, $sql);
                
        if ($registro_recuperado) {
            $fotito = mysqli_fetch_assoc($registro_recuperado);
            if (isset($fotito["FOTO"]) && $fotito["FOTO"]!="") {
                if (file_exists("./foto_perfil/".$fotito["FOTO"])) {
                unlink("./foto_perfil/".$fotito["FOTO"]);
                }
            }   
        }
        $consulta="UPDATE profesor SET FOTO='$nombreArchivo_foto' WHERE ID='$ID'";
        $resultado= mysqli_query($conn,$consulta);
    }

    if ($resultado) {   
        echo "<script> window.alert('PROFESOR EDITADO CORRECTAMENTE.'); window.location.href = './index.php'; </script>";
    } else {
        echo "<script> window.alert('ERROR: PROFESOR NO EDITADO CORRECTAMENTE.'); </script>";
    }
}else{
    $ID=$_GET['ID'];
    $sql="SELECT * FROM `profesor` WHERE ID='$ID'";
    $resultado=mysqli_query($conn, $sql); 
    $datos=mysqli_fetch_assoc($resultado);
    $ID         = $datos['ID'];
    $NOMBRE     =$datos['NOMBRE'];
    $APELLIDO   =$datos['APELLIDO'];
    $FOTO       =$datos['FOTO'];
    $CARGO      =$datos['CARGO'];
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Docente</title>
    <link rel="shortcut icon" href="../../../IMG/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../CSS/sistema/editar.css">
    <!--iconos-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>
<body>
    <main>  
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <span class="title">Datos Del Docente</span>
            <div>
                <input type="hidden" name="id" id="id"  value="<?php echo $ID ?>">
            </div>
        
            <input type="file" name="fotito" id="fotito">
        
            <label class="avatar" for="fotito">
            <span> 
            <?php if ($FOTO != '') { ?> <img src="./foto_perfil/<?php echo $FOTO ?>" class="img-avatar"> <?php } ?> 
            </span>
            </label>
        
            <label for="nombre">Nombres completos:</label> 
                <input class="input" type="text" name="nombre" id="nombre" placeholder="Ronald David" required value="<?php echo $NOMBRE ?>">
        
            <label for="apellido">Apellidos completos:</label> 
                <input class="input" type="text" name="apellido" id="apellido" placeholder="Parraga Mendoza" required value="<?php echo $APELLIDO ?>">
        
            <label for="Cargo">Cargo:</label>
                <input class="input" type="text" name="Cargo" id="Cargo" required value="<?php echo $CARGO ?>">
        
            <div style="display: flex; justify-content: space-between;">
                <button type="submit" name="Actualizar" id="Actualizar"><i class='bx bxs-save' style="font-size: 30px;"></i></button>
                <a class="regresar" href="./index.php"><i class='bx bx-undo'></i></a> 
            </div>
        </form>
    </main>
</body>
</html>

<?php

$ID=$_GET['ID'];
include("../../conexion/bd.php");
$new_estado=0;
//$sql="UPDATE usuario SET estado='".$new_estado."'WHERE id='".$ID."'";
$sql ="UPDATE `usuarios` SET ESTADO ='$new_estado' WHERE ID='$ID'";

$resultado=mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script> location.assign('./index.php'); </script>";
    
}else{
    echo "<script> window.alert('ERROR: ¡El Usuario NO se han borrado correctamente.!'); location.assign('./index.php'); </script>";
}

?>
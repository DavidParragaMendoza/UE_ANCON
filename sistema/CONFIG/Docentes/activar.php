<?php

$ID=$_GET['ID'];
include("../../conexion/bd.php");
$new_estado=1;
//$sql="UPDATE usuario SET estado='".$new_estado."'WHERE id='".$ID."'";
$sql ="UPDATE `profesor` SET ESTADO ='$new_estado' WHERE ID='$ID'";

$resultado=mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script> location.assign('./index.php'); </script>";
    
}else{
    echo "<script> window.alert('ERROR: ¡El Profesor NO se han activado correctamente.!'); location.assign('./index.php'); </script>";
}

?>
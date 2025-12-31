<?php
include ("./api-google/vendor/autoload.php");

include("../../conexion/bd.php");

//credenciales 

putenv('GOOGLE_APPLICATION_CREDENTIALS=uea-sistema-libros-34cd54b8f86c.json');

$client = new Google_Client();

$client -> useApplicationDefaultCredentials();

$client->SetScopes(['https://www.googleapis.com/auth/drive.file']);


try {
    $materia    = $_POST['materia'];
    $año        = $_POST['año'];
    $nombre     = $_FILES['libro']['name'];
    

    $service = new Google_Service_Drive($client);

    $file_path= $_FILES['libro']['tmp_name'];

    $file  = new Google_Service_Drive_DriveFile();
    $file->setName($nombre); 

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime_type = finfo_file($finfo, $file_path);

    $file->setParents(array("1Y17Fn3JJ4GkIAs_ZO6vYDIVSu28kzAfK"));
    $file->setDescription("LIBROS SUBIDOS DESDE EL SITEMA LIBROS UEA");
    $file->setMimeType("$mime_type");

    $resultado = $service->files->create(
        $file, 
        array(
            'data' => file_get_contents($file_path),
            'mimeType' => "image/jpeg",
            'uploadType' => 'media'
        )
    );
    

    $ruta ='https://drive.google.com/open?id='. $resultado->id;
    $id_libro = $resultado->id;


        $consulta_existencia = "SELECT * FROM `libros` WHERE `MATERIA`='$materia' AND `ANO`='$año' AND `ESTADO`='1'";
        
        $resultado_existencia = mysqli_query($conn, $consulta_existencia);

        if (mysqli_num_rows($resultado_existencia) > 0) {
            echo "<script>alert('El libros ya esta subido al sistema.');</script>";          
        } else {
                           
           $consulta ="INSERT INTO `libros`(`MATERIA`, `ANO`, `NOMBRE`, `RUTA`, `LIBRO_ID`, `ESTADO`) VALUES ('$materia','$año','$nombre','$ruta','$id_libro','1')";

            $resultado= mysqli_query($conn,$consulta);
            echo "<script>alert('Libros subido al sistema correctamente.'); window.location.href = './index.php';</script>";
        } 
            echo "<script>alert('Error: El libro no se subio al sistema correctamente.');</script>";
        

} catch (Google_Service_Exception $gs) {
    $mensaje = json_decode($gs->getMessage());
    echo $mensaje->error->message();
}catch(Exception $e){
    echo $e->getMessage();
}

?>
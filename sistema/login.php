<?php
session_start(); 
include("./conexion/bd.php");

 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Crear'])) {
     $nombre     = $_POST['nombre'];
     $apellido   = $_POST['apellido'];
     $foto       =$_FILES["fotito"]['name'];
     $usuario    = $_POST['user'];
     $password   = $_POST['password'];

     // Verificar si el nombre de usuario ya existe
     $consulta_existencia = "SELECT * FROM `usuarios` WHERE USUARIO='$usuario' AND `ESTADO`='1'";
     $resultado_existencia = mysqli_query($conn, $consulta_existencia);
     
     if (mysqli_num_rows($resultado_existencia) > 0) {
         
         // El nombre de usuario ya existe, muestra un mensaje de error
         echo "<script>alert('El nombre de usuario ya está en uso. Por favor, elija otro.');</script>";
            
     } else {
         if ($foto != '') {
             $fecha = new DateTime();
             $nombreArchivo_foto = $fecha->getTimestamp() . "_" . $_FILES["fotito"]['name'];
             $tmp_foto = $_FILES["fotito"]['tmp_name'];
             
             if (move_uploaded_file($tmp_foto, "./CONFIG/Usuarios/foto_perfil/" . $nombreArchivo_foto)) {
             
                 $consulta ="INSERT INTO `usuarios`(`NOMBRE`, `APELLIDO`, `FOTO`, `USUARIO`, `CONTRASENA`, `ROL`, `ESTADO`) VALUES ('$nombre','$apellido','$nombreArchivo_foto','$usuario','$password','Estudiante','1')";
                 $resultado= mysqli_query($conn,$consulta);
                 
                 session_start();
                 $_SESSION['NOMBRE'] = $usuario;
                 
                 echo "<script>alert('Te has inscrito correctamente.'); window.location.href = './Libros_user/';</script>";
             } else {
                 echo "<script>alert('Error: No te has inscrito correctamente.');</script>";
             }

         }else {                
                                 
                 // El nombre de usuario no existe, puedes realizar la inserción
                 $consulta = "INSERT INTO usuarios(`NOMBRE`, `APELLIDO`,`USUARIO`, `CONTRASENA`, `ROL`, `ESTADO`) VALUES ('$nombre','$apellido','$usuario','$password','Estudiante','1')";
                 
                 $resultado = mysqli_query($conn, $consulta);
                 
                 if ($resultado) {
                     session_start();
                     $_SESSION['NOMBRE'] = $usuario;
                     echo "<script>alert('Te has inscrito correctamente.'); window.location.href = './Libros_user/';</script>";
                 } else {
                     echo "<script>alert('Error: No te has inscrito correctamente.');</script>";
                 }
             }
     }
 }


 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Entar'])) {
     $usuario    = $_POST['user1'];
     $password   = $_POST['password1'];
 
     //$consulta = "SELECT * FROM user WHERE USER = '$nombre' AND PASS = '$contra' AND ESTADO = '1'";
     $consulta = "SELECT * FROM usuarios WHERE `USUARIO`='$usuario' AND `CONTRASENA`='$password' AND `ESTADO`='1'";
     $resultado = mysqli_query($conn, $consulta);
 
     if ($fila = mysqli_fetch_assoc($resultado)) {
         // Inicio de sesión exitoso
         session_start();
         $_SESSION['NOMBRE'] = $usuario;
 
         if ($fila["ROL"] == 'Estudiante') {
             // Redirigir a otra página cuando las credenciales sean "ANGELA" y "admin"
             echo "<script>window.location = './Libros_user/';</script>";

         } else {
            echo "<script>window.location = './CONFIG/';</script>";

         }
     } else {
         echo "<script> window.alert('Usuario o contraseña incorrectos.'); </script>";
     }
 }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar a Sistema</title>
    <link rel="shortcut icon" href="../IMG/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/sistema/login.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!--tipografia-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

</head>
<body>
<main class="contenedor">

    <div class="main">  	
        <input type="checkbox" id="chk" aria-hidden="true">
        
        <div class="login">
            <form class="form" action="" method="post">
                <label for="chk" aria-hidden="true">Iniciar Sesion</label>
                
                    <div class="div_label-l">Nombre del usuario</div>
                    <input class="input" type="text" name="user1" id="user1"  required>
					<div class="div_label-l">Password</div>
                    <input class="input" type="password" name="password1" id="password1" required>
					
                    <button type="submit"  name="Entar" >Entar</button>
				
                </form>
			</div>
            
            <div class="register">
                <form class="form"  action="" method="post" enctype="multipart/form-data">
                    <label for="chk" aria-hidden="true">Crear Cuenta</label>
                    
                    <input id="file" type="file" name="fotito">
                    <label class="avatar" for="file">
                        <span> 
                        <i class='bx bx-photo-album'style="color: black; font-size: 40px;"></i>
                        </span>
                    </label>
                    
                    <div class="div_label">Nombres completos</div>
                    <input class="input" type="text" name="nombre" id="nombre"  required>
                    <div class="div_label">Apellidos completo</div>
                    <input class="input" type="text" name="apellido" id="apellido"  required>
                    <div class="div_label">Nombre del usuario</div>
                    <input class="input" type="text" name="user" id="user"  required>
                    <div class="div_label">Password</div>
                    <input class="input" type="password" name="password" id="password" required>
                    <button type="submit"  name="Crear">Crear</button>
				</form>
			</div>
        </div>
</main>    
</body>
</html>

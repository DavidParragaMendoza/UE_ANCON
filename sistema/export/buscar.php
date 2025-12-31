<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "ueanconc_paginauea2023";
$password = "xjLs&Z0qZ}b{";
$dbname = "ueanconc_proyecto2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// Recibir el nombre de la tabla
$tabla = $_POST['tabla'];

// Validar que la tabla exista
$sql = "SHOW TABLES LIKE '$tabla'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    die("La tabla $tabla no existe en la base de datos");
}

// Crear el nombre del archivo con la fecha actual
$fecha_actual = date("Y-m-d");
$nombre_archivo = $tabla . "_" . $fecha_actual . ".sql";
// Crear el contenido del archivo SQL

$contenido = "";

// Escribir el código para crear la tabla
$sql = "SHOW CREATE TABLE $tabla";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$contenido .= $row['Create Table'] . ";\n\n";

// Escribir el código para insertar los datos de la tabla
$sql = "SELECT * FROM $tabla";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $campos = array_keys($row);
    $valores = array_values($row);
    $sql = "INSERT INTO $tabla (" . implode(", ", $campos) . ") VALUES ('" . implode("', '", $valores) . "');\n";
    $contenido .= $sql;
}

// Agregar la fecha al contenido del archivo
$contenido .= "-- Fecha de creación: " . date("Y-m-d H:i:s") . "\n";

// Enviar el contenido al navegador
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . $nombre_archivo);
echo $contenido;
?>
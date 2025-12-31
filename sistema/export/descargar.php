<?php
// Definir los datos de la base de datos
$dbhost = "localhost";
$dbname = "ueanconc_proyecto2";
$dbuser = "ueanconc_paginauea2023";
$dbpass = "xjLs&Z0qZ}b{";

// Conectarse a la base de datos
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Obtener la fecha actual
$date = date('Y-m-d H:i:s');

// Nombre del archivo de descarga
$filename = "basededatos_" . date('Y-m-d') . ".sql";

// Inicializar variable para almacenar SQL
$sql_dump = "";

// Agregar comando para crear la base de datos
$sql_dump .= "CREATE DATABASE IF NOT EXISTS $dbname;\n\n";
$sql_dump .= "USE $dbname;\n\n";

// Consultar la lista de tablas en la base de datos
$tables_result = $conn->query("SHOW TABLES");

if ($tables_result->num_rows > 0) {
    // Recorrer cada tabla
    while ($row = $tables_result->fetch_row()) {
        $table_name = $row[0];

        // Obtener la estructura de la tabla
        $structure_query = "SHOW CREATE TABLE $table_name";
        $structure_result = $conn->query($structure_query);

        if ($structure_result->num_rows == 1) {
            $structure_row = $structure_result->fetch_row();
            $sql_dump .= $structure_row[1] . ";\n\n"; // Estructura de la tabla

            // Obtener el contenido de la tabla
            $content_query = "SELECT * FROM $table_name";
            $content_result = $conn->query($content_query);

            if ($content_result->num_rows > 0) {
                $sql_dump .= "INSERT INTO $table_name VALUES ";
                while ($content_row = $content_result->fetch_assoc()) {
                    $sql_dump .= "(";
                    foreach ($content_row as $key => $value) {
                        $sql_dump .= "'" . $conn->real_escape_string($value) . "',";
                    }
                    $sql_dump = rtrim($sql_dump, ","); // Eliminar la coma al final
                    $sql_dump .= "),";
                }
                $sql_dump = rtrim($sql_dump, ","); // Eliminar la coma al final
                $sql_dump .= ";\n\n";
            }
        }
    }

    // Establecer encabezados para descargar el archivo
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $filename);

    // Escribir SQL en la salida
    echo "-- Fecha del backup: $date\n\n";
    echo $sql_dump;
} else {
    echo "No se encontraron tablas en la base de datos.";
}

// Cerrar conexión
$conn->close();
?>

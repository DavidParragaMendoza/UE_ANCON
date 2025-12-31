<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscar y descargar tablas SQL</title>
</head>
<body>
    <h1>Buscar y descargar tablas SQL</h1>
    <form action="buscar.php" method="post">
        <label for="tabla">Nombre de la tabla:</label>
        <select id="tabla" name="tabla" required>
            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "ueanconc_paginauea2023";
            $password = "xjLs&Z0qZ}b{";
            $dbname = "ueanconc_proyecto2";
            // ----1 
            $conn = mysqli_connect ($servername, $username, $password, $dbname) or die ("No se ha podido conectar con el servidor");
            // ---2 
            $tablas = mysqli_query ($conn, "SHOW TABLES") or die ("No se ha podido obtener las tablas");
            //-- 3
            while ($fila = mysqli_fetch_row ($tablas)) {
                echo "<option value=\"$fila[0]\">$fila[0]</option>";
            }
            ?>
        </select>
        <input type="submit" value="Buscar">
    </form>
    <form action="descargar.php" method="post">
        <input type="submit" value="Descargar toda la base de datos">
    </form>
</body>
</html>
<style>
    /* Estilos generales */
    body {
        background-color: #f0f0f0; /* Color de fondo */
        font-family: Arial, sans-serif; /* Tipo de fuente */
        margin: 0; /* Margen */
        padding: 0; /* Relleno */
    }

    h1 {
        color: #333333; /* Color del texto */
        text-align: center; /* Alineación del texto */
        margin-top: 20px; /* Margen superior */
    }

    form {
        width: 80%; /* Ancho */
        max-width: 600px; /* Ancho máximo */
        margin: 20px auto; /* Margen automático */
        padding: 20px; /* Relleno */
        border: 1px solid #cccccc; /* Borde */
        border-radius: 10px; /* Radio del borde */
        box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra */
    }

    label {
        display: block; /* Mostrar como bloque */
        margin-bottom: 10px; /* Margen inferior */
    }

    select, input {
        width: 100%; /* Ancho */
        height: 40px; /* Alto */
        font-size: 18px; /* Tamaño de fuente */
        border: 1px solid #cccccc; /* Borde */
        border-radius: 5px; /* Radio del borde */
        outline: none; /* Sin contorno */
    }

    input[type="submit"] {
        background-color: #333333; /* Color de fondo */
        color: #ffffff; /* Color del texto */
        cursor: pointer; /* Cursor */
    }

    input[type="submit"]:hover {
        background-color: #555555; /* Color de fondo al pasar el cursor */
    }
</style>

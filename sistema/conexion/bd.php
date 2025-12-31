<?php

// $servername="localhost";
// $username="ueanconc_paginauea2023";
// $password="xjLs&Z0qZ}b{";
// $dbname="ueanconc_proyecto2";
//   $conn = new mysqli($servername, $username, $password, $dbname);
//   if ($conn->connect_error) {
//       die("Error en la conexión a la base de datos: " . $conn->connect_error);
//   }
// $conn->set_charset("utf8");

?>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ueanconc_proyecto2";
$conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Error en la conexión a la base de datos: " . $conn->connect_error);
  }
$conn->set_charset("utf8");

?>

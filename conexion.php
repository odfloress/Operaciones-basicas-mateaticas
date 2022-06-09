<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);
// validar conexion 
if ($conn->connect_error) {
    die("conexion fallida: " . $conn->connect_error);
  }
  

?>






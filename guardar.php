<?php
require 'conexion.php';
$nombre=$_POST["nombre"]; //asigna el input nombre a la variable
$correo=$_POST["correo"]; //asigna el input correo a la variable
$accion=$_POST["accion"]; //asigna el boton nombre a la variable esto sirve cuando hay varios botones


switch($accion){
    case "insertar": // es insertar por que el valor del boton es insertar
                    $sql = "INSERT INTO personas (nombre, correo)
                    VALUES ('$nombre', '$correo')";
                    
                    if ($conn->query($sql) === TRUE) {
                    echo "Nuevo registro creado con éxito";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    
                    $conn->close(); //cierra la conexion a la base de datos para que no que de abierta
                    // header('Location: formulario.php');  //redirige a paginas
    break;



      case "modificar":
        echo "toco el botón calcular" . $nombre;
        break;
      case "eliminar":
        echo "toco el boton eliminar";
        break;
      default:
        echo "algo salio mal";
}


?>
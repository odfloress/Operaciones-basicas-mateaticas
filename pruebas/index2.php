<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular 2</title>
</head>
<body>
    <form action="" method="post"></form>
    <form id="form" name="form" action="index2.php" method="REQUEST" >
        <input type="text" id="n1" name="n1" value="" required>
        <input type="text" id="n2" name="n2" value="" required>
       
        

        <input class="form-control" list="browsers" type="calcular" id="calcular" name="calcular"  id="browser" placeholder="Seleccione" required>
        <datalist id="browsers">
          <option value="Suma">
          <option value="Resta">
          <option value="Multiplicación">
          <option value="División">
        </datalist>    

        <input type="submit" name="enviar" id="enviar"  value="enviar" >
        </form>

        <?php
$calcular=$_REQUEST["calcular"];

$n1=$_REQUEST["n1"];
$n2=$_REQUEST["n2"];


if($calcular=="Suma"){
echo "la suma es: " .  $n1 + $n2;

                  }   
                  
if($calcular=="Resta"){
echo "la suma es: " .  $n1 - $n2;
                  } 
                  
if($calcular=="Multiplicacion"){
echo "la suma es: " .  $n1 * $n2;
} 
if($calcular=="División"){
    echo "la suma es: " .  $n1 / $n2;
    } 
    

?>
<br>
   El resultado es: <input type="text" value="<?php echo $n1 + $n2 ?>" >
</body>
</html>
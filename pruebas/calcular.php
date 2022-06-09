<?php
$calcular=$_POST["calcular"];

$n1=$_POST["n1"];
$n2=$_POST["n2"];


if($calcular=="+"){
    
$suma= $n1 + $n2;
echo "la suma es: " . $suma;
echo  $n1 + $n2;
                  }   
                  
 if($calcular=="-"){
    
$suma= $n1 - $n2;
echo "la suma es: " . $suma; 
 }


?>
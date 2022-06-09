<?php
$calcular=$_POST["calcular"];

$n1=$_POST["n1"];
$n2=$_POST["n2"];


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
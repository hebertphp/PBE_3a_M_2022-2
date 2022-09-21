<?php
$valor1=10;
$valor2="10";
//igualdade ==
$res=$valor1==$valor2;
echo "$valor1 == $valor2 : ";
var_dump($res);//
//identico ===
$res=$valor1===$valor2;
echo "<br>$valor1 === $valor2 : ";
var_dump($res);//
$res=$valor1!=$valor2;
echo "<br>$valor1 != $valor2 : ";
var_dump($res);//
$res=$valor1!==$valor2;
echo "<br>$valor1 !== $valor2 : ";
var_dump($res);//
?>
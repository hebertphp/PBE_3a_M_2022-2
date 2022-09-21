<?php
$a = "Maria ";//$a = "Maria "
echo "$a <br>";//Imprimiu(Saída) Maria 
$b = "Leopoldina ";//$b = "Leopoldina "
echo "$b <br>";//Imprimiu(Saída) Leopoldina
$a.=$b;//$a = Maria . Leopoldina//$a = "Maria Leopoldina"
echo $a;//Imprimiu(Saída) Maria Leopoldina
//echo $a . $b;//
$b .= $a;//$b = Leopoldina . Maria Leopoldina//$b=Leopoldina  Maria Leopoldina
echo "<br>$b";//Imprimiu(Saída) Leopoldina  Maria Leopoldina
?>

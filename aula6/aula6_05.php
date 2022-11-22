<?php
/*
criar uma var do tipo array com os valores abaixo
água,avião ✈,submarino
destroyer,água,água
água,água,porta-aviões

mostrar a saída:
avião
submarino
destroyer
porta-aviões
*/
$batalha=array(
    array("água","avião ✈" ,"submarino"),
    array("destroyer","água","água"),
    array("água","água","porta-aviões")
);
echo "<pre>";print_r($batalha);echo "<pre><hr>";
echo $batalha[0][1]."<br>";
echo $batalha[0][2]."<br>";
echo $batalha[1][0]."<br>";
echo $batalha[2][2]."<br>";
?>
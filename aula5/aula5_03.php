<?php
//echo "Count: ".count($_POST);
if(count($_POST)==0){
    ?>
    <a href="aula5_03.html">Comece pelo form!</a>
    <?php
    exit();
}
$numero=(int)$_POST["numero"];
if($numero % 2 == 0) { 
    echo "$numero - Par"; 
} 
else { 
    echo "$numero - Impar"; 
}
$res=($numero % 2 == 0)?"PAR":"IMPAR";
echo "<br>Ternario, $numero - $res";
/*
Ternario 3 situações
(condiçao) ? valor cond verdadeira : valor cond falsa
*/
?>
<br><a href="aula5_03.html">Faça um novo teste!</a>
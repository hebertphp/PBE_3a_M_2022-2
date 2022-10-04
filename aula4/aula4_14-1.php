<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula4 - aula4_14</title>
</head>
<body>
    <form method="post" action="<?=$_SERVER["PHP_SELF"];?>">
        Valor a <input type="number" name="a" required><br>
        Valor b <input type="number" name="b" required><br>
        <button type="submit">Enviar</button>
    </form>
<?php
if(count($_POST)==0){exit();}
$a=$_POST["a"];
$b=$_POST["b"];
echo "a=$a , b=$b<br>";
// $a=50;
// $b=120;
$c= ($a<=$b);//true (V)
$d= !($a<=$b);//false (F)
var_dump($c);
echo "<br>";
var_dump($d);
?>
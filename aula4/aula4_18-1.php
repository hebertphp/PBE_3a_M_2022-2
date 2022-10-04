<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula4 - aula4_18</title>
</head>
<body>
    <form method="post" action="<?=$_SERVER["PHP_SELF"];?>">
        Valor a <input type="number" name="a" required><br>
        Valor b <input type="number" name="b" required><br>
        Valor c <input type="number" name="c" required><br>
        <button type="submit">Enviar</button>
    </form>
<?php
if(count($_POST)==0){exit();}
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
echo "a=$a , b=$b , c=$c<br>";
// $a=50;
// $b=120;
// $c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = ".$d."<br>e = ".$e;
?>
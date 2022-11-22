<?php
/*
Criar uma variável array com os nomes:
Anacleto, Pafuncia, Belarmina, Deoclasia
Mostrar as saídas abaixo:
* Mostrar todos os valores do array
* Mostrar os valores individuais, um valor por linha
*/
//             0          1            2              3
$nome=array("Anacleto", "Pafuncia", "Belarmina", "Deoclasia");//criar uma var do tipo array
echo "<pre>";print_r($nome);echo "</pre><hr>";//mostra todos os valores
echo $nome[0]."<br>";//valores individuais
echo $nome[1]."<br>";
echo $nome[2]."<br>";
echo $nome[3]."<br>";
?>
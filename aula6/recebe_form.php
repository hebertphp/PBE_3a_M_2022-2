<?php
if(count($_POST)==0){
    echo "ERRO!";
    echo "<a href='aula6_10.php'>Clique aqui para o Formulário</a>";
    exit();
}
$uf=$_POST["uf"];
echo "<pre>";print_r($_POST);echo "</pre>";
echo "UF selecionado: $uf";
?>
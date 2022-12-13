<?php
session_start();
echo "Nome: ".$_SESSION["txt_nome"]."<br>";
echo "E-mail: ".$_SESSION["txt_email"]."<br>";
echo "ID: ".session_id()."<br>";
?>
<a href="sair.php">SAIR</a>
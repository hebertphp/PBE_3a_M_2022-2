<?php
session_start();
echo "Nome: ".$_SESSION["txt_nome"]."<br>";
echo "E-mail: ".$_SESSION["txt_email"]."<br>";
?>
<a href="pg2.php">PG2</a>
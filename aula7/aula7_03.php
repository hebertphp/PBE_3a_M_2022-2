<?php
session_start();
echo "<pre>";print_r($_SESSION);echo "</pre>";
echo "Nome: {$_SESSION["nome"]}<br>";
echo "Session_id: ".session_id();
?>
<br><a href="aula7_04.php">aula7_04</a>
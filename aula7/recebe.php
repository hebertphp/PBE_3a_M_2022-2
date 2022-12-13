<?php
session_start();
echo strtotime("now");
/*
Var super globais
X  $_GET -> resgata os dados de um form que utilizou o method="get"
✔ $_POST -> resgata os dados de um form que utilizou o method="post"
X  $_REQUEST -> resgata os dados de um form que utilizou ou method="get" ou method="post"
*/
echo "<h1>Recebe.php</h1>";
$txt_nome=$_POST["txt_nome"];
$txt_email=$_POST["txt_email"];

$_SESSION["txt_nome"]=$txt_nome;
$_SESSION["txt_email"]=$txt_email;

echo "Nome: $txt_nome<br>Email: $txt_email<br>";
echo "<pre>";print_r($GLOBALS);echo "</pre>";//
?>
<a href="pg1.php">PG1</a>
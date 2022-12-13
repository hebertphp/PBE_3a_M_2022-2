<?php
session_start();
session_destroy();
//header('Location: form_html.php');
echo "Session apagada!";
?>
<br><a href="form.html">Form</a>
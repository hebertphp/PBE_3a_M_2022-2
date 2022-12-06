<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="#">
    <?php
    $uf=array("SP","RJ","MG","ES","TO","AM","BA","MA","PR","RO","DF","RR","PI","MT","AC","RS","PE");
    ?>
    Selecione UF
    <select name="uf" id="uf"> <!-- fixo -->
        <?php
            echo "<option value='SP'>SP</option>";
        ?>
    </select> <!-- fixo -->   <br>
    <input type="submit" value="Enviar!!">
    </form>
</body>
</html>
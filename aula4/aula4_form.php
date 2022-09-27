<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula4 - Form</title>
</head>
<body>
    <form method="post" action="<?=$_SERVER["PHP_SELF"];?>">
        Nome <input type="text" name="nome" required><br>
        Idade <input type="number" name="idade" required><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    //$res=(count($_POST)==0)?exit():"OK";
    if(count($_POST)==0){exit();}
    $nome=$_POST["nome"];
    $idade=$_POST["idade"];
    // $nome=htmlspecialchars($_POST["nome"]);
    //$idade=(int)htmlspecialchars($_POST["idade"]);
    echo "Nome: $nome, idade: $idade";
    ?>
</body>
</html>
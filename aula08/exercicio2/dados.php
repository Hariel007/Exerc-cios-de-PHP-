<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php

        $nome = isset($_GET['nome'])?$_GET['nome']:["Não configurado."]; //O isset verifica se foi configurado
        $ano = isset($_GET['ano'])?$_GET['ano']:0;
        $sexo = isset($_GET['sexo'])?$_GET['sexo']:["Sem sexo."]; // O ? 
        $idade = date("Y") - $ano;

        echo "$nome é $sexo e tem $idade anos.";

        ?>
        <br>
        <a href="./exercicio02.html">Voltar</a>
    </div>
</body>
</html>
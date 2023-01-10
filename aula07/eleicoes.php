<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
</head>
<body>
    <div>
        <?php 
        
        $ano = $_GET['an'];

        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.<hr>";
        echo "Sua atual situação é: ".($total =($idade>=18 && $idade<65)?"OBRIGATORIO VOTAR!":"NÃO É OBRIGATORIO VOTAR!");

        
        
        ?>
    </div>
</body>
</html>
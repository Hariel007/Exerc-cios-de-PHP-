<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de variaveis </title>
</head>
<h1> Variaveis de variaveis</h1>
<body>
    <div>
        <?php 
        
         $x = "abc";
         $$x = "def";

         echo "O conteudo da variavel X é $x.";
         echo "<hr>A variavel criada recebeu o valor $abc.";
       
        ?>
    </div>
</body>
</html>
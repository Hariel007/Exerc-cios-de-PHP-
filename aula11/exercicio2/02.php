<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte PHP</title>
</head>
<body>
    <div>
        <?php
        
        $i = 1;

        while($i<=5){
           $v = "num".$i;
           $url = "v".$i;
           $$v =isset($_GET[$url])?$_GET[$url]:0;
           $i++;
        }
        
        echo "O números foram: $num1,$num2,$num3,$num4,$num5.";

        ?>
    </div><br>
    <a href="exercicio2.php">Voltar</a>
</body>
</html>
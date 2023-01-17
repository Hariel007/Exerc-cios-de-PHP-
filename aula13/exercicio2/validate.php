<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title></title>
</head>
<body>
    <div>
        <?php 
        
        $p = isset($_GET["num"])?$_GET["num"]:1;
        $c = 1;



        $r = $p/$c;
        
        if($r <=2){
             echo "<h1>"É um número primo $r"</h1>";
        }else{
            echo "Não é um número primo";
        }
        
        ?>
        <a href="javascript:history(-1)">Voltar</a>
    </div>
</body>
</html>
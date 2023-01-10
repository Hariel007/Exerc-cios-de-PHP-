<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte PHP</title>
</head>
<body>
    <div>
        <?php

          $r = isset($_GET['todos'])?$_GET['todos']:0;

        
          switch($r){
    
             case 1:
                echo "Sul";
                break;
             case 2:
             case 3:
                echo "Sudeste";
                break;
             case 4:
             case 5:
                echo "Nordeste";
                break;
             case 6:
                echo "Sudoeste da Região Norte";
                  default:
                      echo "Estado inválido";
            }
        
          echo "Você é da Região $r";
        ?>
        <a href="./exercicio3.html">Voltar</a>
    </div>
</body>
</html>
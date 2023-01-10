<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        
            $nota1 = isset($_GET['n1'])?$_GET['n1']:["erro"];
            $nota2 =isset($_GET['n2'])?$_GET['n2']:["erro"];
            
            $media= ($nota1 + $nota2)/2;
             
    
            if($media >=7){
                echo "Esta aprovado com $media\n";
            }elseif($media >=4){
                echo "Está em recuperação com $media \n";
            }else{
                echo "Está reprovado $media \n";
            }
           
            

        ?>
        <a href="./exercicio3.html">Voltar</a>
    </div>
</body>
</html>
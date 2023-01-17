<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 2</title>
</head>
<body>
    <div>
        <?php  
        
           function teste($x){ // &$x a variavel lá vai passar como 5 também.
            $x += 2;
            echo "O valor de X é $x";
         }
        
         $a = 3;
         teste($a);
         echo "<p>O valor de A é $a</p>"; 
         echo "<hr>"; 

         include "funcoes1.php"; // Mostra o erro,mas continua.  //require para tudo 
        
         // include_once e required_once carrega somente uma vez. Mesmo eu chamando várias vezes.
         
         echo "<h1>Testando novas funções</h1>";
         ola();
         mostraValor(5);
         echo "<h2>Finalizando o programa...</h2>"; 
        
        ?>
    </div>
</body>
</html>
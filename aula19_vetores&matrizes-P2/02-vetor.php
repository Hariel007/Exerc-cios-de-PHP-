<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colocando elementos</title>
</head>
<body>
    <div>
        <pre>
           <?php 
              $n = array("A","j","M","X","K"); //Vetor padrão sem alterações.
              
              //$n[] = "O"; // Aqui estou colocando um elemento a mais no vetor forma simples e feia.
             
             // array_push($n,"Y",);PUSH -> Vai jogar para dentro do vetor na última posição.

             // array_pop($n);POP -> Elimina o último elemento do vetor.

             // array_unshift($n,"Z");UNISHFT -> Coloca o elemento em primeiro no vetor.
             
             // array_shift($n); SHIFT -> Elimina o primeiro elemento do vetor.
            
              print_r($n);



            ?>
        </pre> <!-- Fica mais, fácil de visualizar com o pre  -->
    </div>
</body>
</html>
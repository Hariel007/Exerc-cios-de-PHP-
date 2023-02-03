<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colocando em ordens</title>
</head>
<body>
    <div>
        <pre>
           <?php 
              //$n = array(5,8,3,9,12); //Vetor bagunçado,padrão.
              $n = array(2=>5,4=>8,6=>3,8=>9,10=>12);


              //sort($n); //Coloca o vetor em ordem tanto números quanto letras.
              //rsort($n); Coloca em ordem decrescente. R = Reverse.
              //asort($n); Traz os indices junto com os elementos. A = Associativo.
              //arsort($n); 
              //ksort($n); Ordena os indices,mas não os elementos do vetor.
                krsort($n); //indices decrecente.
            
                print_r($n);

            ?>
        </pre> <!-- Fica mais, fácil de visualizar com o pre  -->
    </div>
</body>
</html>
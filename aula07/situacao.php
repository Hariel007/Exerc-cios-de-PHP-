<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <div>
        <?php  
         
         $aluno1 = $_GET['n1'];
         $aluno2 = $_GET['n2'];

         $media = ($aluno1+$aluno2)/2;
         echo "A media de $aluno1 e $aluno2 é $media<hr>";
    
         echo "A situação do aluno é  ".($notaFinal = ($media>6)?"APROVADO":"REPROVADO"); //CONCATENADO E SIMPLES.

        /*  if($resultado >6){
            echo "Aprovado";
         }else{
            echo "Reprovado";
         } JEITO MAIS TRABALHOSO,MAS FUNCIONA NORMALMENTE. 
          */

          
        ?> 
    </div>
</body>
</html>
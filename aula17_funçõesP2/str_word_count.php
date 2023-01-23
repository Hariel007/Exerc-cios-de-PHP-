<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STR_WORD_COUNT</title>
</head>
<body>
    <div>
        <?php 
         
         $frase = "Eu vou estudar PHP agora"; //Essa função contas as palavras da frase
         $count = str_word_count($frase);// str_word_count($frase,1); para gerar o array
         echo $count;
        /*  print_r($count); Gerei um vetor -> array */
        
        ?>
    </div>
</body>
</html>
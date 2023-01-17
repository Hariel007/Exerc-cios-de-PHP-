<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        
         $txt = "Este é um exemplo de string gigante criado pelo PHP para mostrar a função wordwrap...";
         $res =wordwrap($txt,20,"<br>\n",false); 
           //Quebra o texto 
          //O número 5 serve pra quebrar as palavras.
         // O True serve para quebrar as palavras mesmo se faltar uma letra pra terminar a palavra.
         echo $res;
        
        
        ?>
    </div>
</body>
</html>
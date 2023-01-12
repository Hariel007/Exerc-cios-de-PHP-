<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
      body{
        border: 1px solid black;
        width:20%;
        border-radius:10px;
        padding: 5px ;

      }
      .botao{
        text-align:center;
        color:red;
        background-color:yellow;
      }
    
   </style>
</head>
<body>
    <form method="get" action="02.php">
        <?php
           
           $c = 1;
           while($c<=5){
              echo "Valor $c = <input type='number' name='v$c' max='100' min='0' value='0'><br>";
              $c++;
           }
           
          
           //Não pode colocar aspas duplas dentro de um echo
           
        ?><br>
        <input type="submit" value="Enviar" class="botao">
    </form>
</body>
</html>
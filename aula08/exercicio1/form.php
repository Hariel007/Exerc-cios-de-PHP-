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
         
         $valor=$_GET['n'];
         $rq = sqrt($valor);        
          echo"A raiz quadrada de $valor é igual a ".number_format($rq,2);
         
        
        ?>
        <br>
        <a href="./form.html">Voltar</a>
    </div>
</body>
</html>
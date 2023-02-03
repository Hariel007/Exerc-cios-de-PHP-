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
        <pre>
           <?php 
              $cad = array("nome"=>"Hariel","idade"=>"20","peso"=>"68");   
          
              $cad["fuma"]=true; // Criando mais um indice.
              print_r($cad);
            ?>
        </pre> <!-- Fica mais fácil de visualizar com o pre  -->
    </div>
</body>
</html>
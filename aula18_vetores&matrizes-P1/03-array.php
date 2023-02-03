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
            <table border="1"><tr>
                <?php 
                      $c = range(1,20,2); 
                      foreach($c  as $v ){
                    echo "<td>$v";
                 }         
                ?>
            </table>
        </pre> <!-- Fica mais fácil de visualizar com o pre  -->
    </div>
</body>
</html>
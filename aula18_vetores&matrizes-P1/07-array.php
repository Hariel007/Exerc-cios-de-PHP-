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
               $n = array( 
                    
                    array(6,4), // Array dentro de outro array.
                    array(4,9), 
                    array(3,2));
              
               $n[0][1] = $n[2][0];
               print_r($n);
             
            ?>
        </pre> <!-- Fica mais fácil de visualizar com o pre  -->
    </div>
</body>
</html>
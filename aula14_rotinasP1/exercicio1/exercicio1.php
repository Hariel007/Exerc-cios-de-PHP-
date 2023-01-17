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
            function soma ($a,$b){
            $s= $a + $b;
            echo "<p>A soma vale $s</p>";          
          }
        
          soma(10,5);
          soma(10,10);
          soma(25,25);
        
        
        ?>
    </div>
</body>
</html>
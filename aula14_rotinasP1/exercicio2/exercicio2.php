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
           
           function soma ($c,$d){
             $r = $c + $d; 
             /* Mas terei que apagar essa linha */
             return $r;
             /* return $c + $d; */
           }
          
           $z = -5;
           $y = 3;

           $r = soma($z,$y);
           echo "A soma entre $z e $y é igual a $r"; 

        ?>
    </div>
</body>
</html>
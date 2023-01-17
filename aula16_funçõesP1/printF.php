<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrintF</title>
</head>
<body>
    <div>
        <?php 
        
        $prod = "leite";
        $preco = 4.5;
        
        printf("O %s está custando R$%.2f",$prod,$preco);
        
        /*    %d valor decimal (positivo ou negeativo)
              %u valor valor decimal (apenas positivo)
              %f valor real
              $s strung      */


        ?>
    </div>
</body>
</html>
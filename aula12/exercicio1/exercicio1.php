<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressivo/Regressivo</title>
</head>
<body>
    <div>
        <?php  // PARTE 2 
        
          $c = 1; //Contador progressivo
             
              echo "Progressivo: ";
               while($c<= 20) //Função While normal.
               {
                echo"$c ";
                $c+=1; //$c+=2 pula de 2 em 2.
               } //Funciona na função 'do' também.

            echo "<hr>";
           
            $c =20; //Contador regressivo
             
            echo "Regressivo: ";
            do{ 
                echo "$c ";
                $c--; 
            } while($c>=1); //Sempre a função While por último no 'do'.
        ?>
    </div>
</body>
</html>
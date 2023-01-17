<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
    <div>
        
         
 <!--        for($n =1;$n<=20;$n++){
            echo "$n<br>";
        }
         
        echo "<hr>";

         for($i=0;$i<=50;$i+=5){ //Pulando de 5 em 5.
            echo "$i ";
         }

         echo "<hr>";

         for($m=20;$m>=0;$m-=2){
            echo "$m "; //Voltando de 20 pulando de 2 em 2.
         } 
 -->
         <form  method="get" action="tabuada1.php">
         
           <select name="num">
                <?php 
                  for ($c=1;$c<=10;$c++){
                      echo "<option>$c</option>";
                  }
                
                ?>          
           </select>
             <input type="submit" value="Tabuada">
         </form>

    </div>
</body>
</html>
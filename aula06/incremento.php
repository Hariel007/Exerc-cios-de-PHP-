<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
</head>
<body>
    <h1>Incremento </h1>

    <div>
        <?php  $atual = $_GET['aa'];
          echo "O ano atual é $atual e o ano anterior era " .--$atual; //Aqui fiz um pre-incremento > .--nomeVariavel
          echo "<hr>";
          /* echo "O ano atual é $atual e o ano próximo vai ser " .++$atual;  */
         ?>
    </div>
</body>
</html>
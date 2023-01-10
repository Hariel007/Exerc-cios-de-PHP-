
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Atributos </h1>
    <div>
        <?php  $preco = $_GET["p"];
          echo "O preço do produto é R$ $preco";

           $preco += ($preco*10/100); //10 seria a quantidade em x% de aumento. 
          //Ou seja o atributo += seria a mesma coisa como >>> $preco = $preco + ($preco*10/100)
          echo "<br> O novo preço com 10% de aumento será R$ $preco";
 
          $preco -= ($preco*20/100); // Aplicando um desconto em uma compra de x valor.
          echo "<hr> O valor com 20% de desconto será R$ $preco";

          //Outros atributos *=, %= , /= ,e.=
          

          $preco += ($preco*20/100); // valor monetario R$ 11,00 ou R$1.000,00 e etc...
          echo "<hr> O valor com 20% de desconto e com casas decimais será R$ ".number_format($preco,2); //Chamada de casas decimais.
        ?>
    </div>

</body>
</html>
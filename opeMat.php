<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores matemáticso em PHP</title>
</head>
<body>
    <?php
       echo "<h3>VARIÁVEIS EM PHP - TIPO INTEIRO</h3>";
       $valor1 = 20;
       $valor2 = 25;
       echo "valor1: " .$valor1;
       echo "<br>valor2: " .$valor2;
       $soma = $valor1 + $valor2;
       echo $soma;
       echo "<br>A soma de $valor1 com $valor2 é " . $soma . "<hr>";
       echo "<h4>Exibindo os tipos de variaveis através do comando vardump<h4>";
       echo "<p>Variavel tipo string</p>";
       var_dump($titulo);
       echo "<p>Variavel tipo inteira</p>";
       var_dump($valor1);



    echo "<h3>OPERADORES MATEMÁTICOS EM PHP</h3>";
    $valor1 = 50;
    $valor2 = 10;
    echo "valor1: " .$valor1;
    echo "<br>valor2: " .$valor2;
    $subtrair = $valor1 - $valor2;
    echo $subtrair;

    echo "<h3>VARIÁVEIS EM PHP - TIPO INTEIRO</h3>";
    $valor1 = 50;
    $valor2 = 10;
    echo "valor1: " .$valor1;
    echo "<br>valor2: " .$valor2;
    $multiplicar = $valor1 * $valor2;
    echo $multiplicar;

    echo "<h3>VARIÁVEIS EM PHP - TIPO INTEIRO</h3>";
    $valor1 = 50;
    $valor2 = 10;
    echo "valor1: " .$valor1;
    echo "<br>valor2: " .$valor2;
    $dividir = $valor1 / $valor2;
    echo $dividir;
    ?>
   
</body>
</html>
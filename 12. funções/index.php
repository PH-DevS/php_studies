<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8">
 <title>Declarando funções</title>
 </head>
 <body>
 <h1>Declarando funções</h1>
 <?php
 // Declara uma função para somar dois valores
 function soma($valor1, $valor2) {
 $resultado = $valor1 + $valor2;
 return $resultado;
 }
 ?>
 <h2>Agora vamos usar a função soma com os valores 3 e 6!</h2>
 <?php
 $a = 3;
 $b = 6;
 echo soma($a, $b);
 ?>
 </body>
</html>
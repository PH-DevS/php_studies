<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8">
 <title>Autoatividade</title>
 </head>
 <body>
 <ul>
 <?php
 $arrayUniasselvi = array ("U", "N", "I", "A", "S", "S", "E", "L", "V", "I");
 foreach ($arrayUniasselvi as $indice => $valor) {
 ?>
 <li>
 <?php
 echo $indice.": ".$valor;
 ?>
 </li>
 <?php
 }
 ?>
 </ul>
 </body>
</html>
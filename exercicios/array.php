<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8">
 <title>Autoatividade</title>
 </head>
 <body>
 
 <?php
	$arrayUniasselvi = array ("U", "N", "I", "A", "S", "S", "E", "L", "V", "I");
		foreach ($arrayUniasselvi as $indice => $valor) {
			print_r ($indice . ": ". $valor . "<br>");
		}
 ?>
 </body>
</html>
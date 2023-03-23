<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>Strings</title>
</head>

<body>

<h1>Estudando strings no PHP!</h1>
<?php
 /* Declaramos uma variável string para armazenar
 o nome de uma linguagem de programação. */
 $linguagemDeProgramacao = "PHP";
?>
<h2>echo com aspas simples:</h2>
<?php
 echo '<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>';
?>
<h2>echo com aspas duplas:</h2>
<?php
 echo "<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>";
?>
<br/>

<h1>Vamos estudar o método print</h1>
<?php
 // Declaramos uma variável string para armazenar o nome de uma instituição de ensino.
 $instituicaoDeEnsino = "UNIASSELVI";
?>
<h2>print com aspas simples:</h2>
<?php
 print '<p>Estudar na $instituicaoDeEnsino é muito Legal !! :-)</p>';
?>
<h2>print com aspas duplas:</h2>
<?php
 print "<p>Estudar na $instituicaoDeEnsino é muito Legal !! :-)</p>";
?>
<br/>

<h1>Estudando as funções trim(), ltrim() e rtrim()</h1>
<h2>Removendo espaços em branco em volta da string</h2>
<?php
 $stringComEspacosEmVolta = "   Três espaços em cada lado   ";
 echo "{".$stringComEspacosEmVolta."}<br />";
 // Remove os espaços em branco em volta da string
 $stringSemEspacosEmVolta = trim($stringComEspacosEmVolta);
 echo "{".$stringSemEspacosEmVolta."}<br />";
?>
<h2>Removendo espaços em branco à esquerda da string</h2>
<?php
 $stringComEspacosAesquerda = "   Três espaços à esquerda";
 echo "{".$stringComEspacosAesquerda."}<br />";
 // Remove os espaços em branco em volta da string
 $stringSemEspacosAesquerda = ltrim($stringComEspacosAesquerda);
 echo "{".$stringSemEspacosAesquerda."}<br />";
?>
<h2>Removendo espaços em branco à direita da string</h2>
<?php
 $stringComEspacosAdireita = "Três espaços à direita   ";
 echo "{".$stringComEspacosAdireita."}<br />";
 // Remove os espaços em branco em volta da string
 $stringSemEspacosAdireita = rtrim($stringComEspacosAdireita);
 echo "{".$stringSemEspacosAdireita."}<br />";
?>
<br/>

<h1>Invertendo uma string em PHP com strev()</h1>
<?php
 $stringNormal = "UNIASSELVI";
 $stringInvertida = strrev($stringNormal);
 echo $stringInvertida;
?>
<br/>
<h1>Manipulando o CASE de strings em PHP com strtolower(), strtoupper() e ucfirst()</h1>
<?php
 $variavelCaseMisturado = "com a UNIASSELVI, posso ver o meu futuro!";
?>
<h2>Invertendo para minúscula:</h2>
<?php
 echo strtolower($variavelCaseMisturado);
?>
<h2>Invertendo para maiúscula:</h2>
<?php
 echo strtoupper($variavelCaseMisturado);
?>
<h2>Invertendo a primeira letra para maiúscula:</h2>
<?php
 echo ucfirst($variavelCaseMisturado);
?>
<br/>

<h1>Substituição de strings em PHP com str_replace()</h1>
<?php
 $variavelTextoOriginal = "A disciplina Algoritmos é demais!";
 $variavelTextoAlterado = str_replace("Algoritmos", "Programação Web I", $variavelTextoOriginal);
 echo $variavelTextoAlterado;
?>
<br/>

<h1>Obtendo o tamanho de strings em PHP com strlen()</h1>
<?php
 $nomeBonito = "PHP";
 $tamanho = strlen($nomeBonito);
 echo "O nome ".$nomeBonito." possui ".$tamanho." letras";
?>

</body>
</html>

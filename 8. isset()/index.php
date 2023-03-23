<h1>A variável não está declarada:</h1>
<?php
 // Declara uma variável porém deixa-a nula:
 $variavel;
 if (isset($variavel)){
 echo "A variável está declarada!";
 } else {
 echo "A variável não está declarada!"; //aqui :-)
 }
?>
<h1>A variável está declarada:</h1>
<?php
 // Declara uma variável e a inicializa:
 $variavel = "variável";
 if (isset($variavel)){
 echo "A variável está declarada!"; // aqui:-)
 } else {
 echo "A variável não está declarada!";
 }
?>
<h1>Exemplo de utilização</h1>
<?php  
$user = 'João da Silva';  
$_SESSION['userID'] = $user; /*A variável de sessão PHP
($_SESSION) é usada para armazenar informações sobre, ou alterar
as configurações do sistema ou site para uma sessão de usuário. */
if (isset($_SESSION['userID'])) {  
   echo " Seja bem-vindo, $_SESSION[userID] ";  
   } 
?> 
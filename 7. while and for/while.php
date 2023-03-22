<h1>While</h1>
<?php
 /* Demonstração de while em PHP
 * O while recebe como parâmetro (entre
parênteses)
 * um valor booleano e permanece em looping até
quanto
 * a condição for verdadeira.
 */
 $contador = 0;
 while ($contador++ < 10) {
 echo $contador."<br />";
 }
?>
<h1>For</h1>
<?php
 /* Demonstração de for em PHP
 * O for recebe três parâmetros (entre parênteses
 *, separados por ponto e vírgula (;))
 * O primeiro é a inicialização do contador
 * O segundo é um booleano que define até quando o
looping será executado
 * O terceiro é um incremento para o contador
 */
 for ($contador = 1; $contador <= 10; $contador++)
{
 echo $contador."<br />";
 }
?>
<?php
$valorProduto = 500.00;
$valorDeposito = 0;
$quantidadeEspaço = "";
$contador = 0;

while ($valorDeposito < $valorProduto) {
    switch ($contador) {
        case 2:
            $quantidadeEspaço = $quantidadeEspaço . " ";
            echo "<br>Atribuiu um espaço";
            break;
        case 6:
            $quantidadeEspaço = $quantidadeEspaço . "  ";
            echo "<br>Atribuiu dois espaços";
            break;
        default:
            echo "<br>Não atribuiu espaço";
            break;
    }

    $valorDeposito = $valorDeposito + 100;
    echo    "<br>Depositado    mais     100.00,     totalizando     " . $valorDeposito . ".";
    ++$contador;
}
$quantidadeEspaço = trim($quantidadeEspaço);
echo "<br><br>Valor da poupança foi de: " . $valorDeposito;

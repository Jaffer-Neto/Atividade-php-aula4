<?php
$entrada = readline("Digite um valor: ");

$tipo = gettype($entrada);
echo "Tipo da entrada: $tipo\n";

$comparacaoSolta = ($entrada == 10) ? 'true' : 'false';
echo "\$entrada == 10  →  $comparacaoSolta\n";

$comparacaoEstrita = ($entrada === 10) ? 'true' : 'false';
echo "\$entrada === 10 →  $comparacaoEstrita\n";

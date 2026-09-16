<?php
$valor = (float)readline("Digite o valor do pedido: ");
$cartao = readline("Cliente possui cartão? (s/n):");
$pix = readline("Cliente possui Pix? (s/n):");

$pagamentoAceito = ($cartao == "s" || $pix == "s");

if($pagamentoAceito){
    echo("Valor do pedido: ");
    echo("pedido aprovado\n");
}else{
    echo("pedido recusado\n");
}

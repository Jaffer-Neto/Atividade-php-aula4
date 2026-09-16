<?php
$idade = (int)readline("Digite sua idade: ");
$ingresso = readline("Possui ingresso? (s/n): ");
$acessoLiberado = (float) TRUE;

if($idade >= 18 && $ingresso == "s"){
    $acessoLiberado = TRUE;
    echo("entrada liberada\n");
}else{
    $acessoLiberado = FALSE;
    echo("entrada negada\n");
}
 
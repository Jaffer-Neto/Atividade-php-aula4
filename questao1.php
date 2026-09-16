<?php
$primeiroNum = (int)readline("Digite o primeiro número: ");
$segundoNum = (int)readline("Digite o segundo número: ");

if($primeiroNum > $segundoNum){
    echo "O primeiro número é maior\n";
}elseif($primeiroNum < $segundoNum){
    echo "O segundo número é maior.\n";
}else{
    echo "Os dois números são iguais.\n";
}
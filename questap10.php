<?php
$nome = readline("Nome do cliente: ");
$idade = (int)readline("Idade: ");
$renda = (float)readline("Renda mensal: ");
$tempoEmprego = (int)readline("Tempo de emprego (meses): ");
$negativado = strtolower(readline("Está negativado? (s/n): "));

$idadePermitida = ($idade >= 18 && $idade <= 65);
$rendaOuEstabilidade = ($renda >= 2000 || $tempoEmprego >= 24);
$estaNegativado = ($negativado === 's');
$nomeLimpo = !$estaNegativado; 

$creditoAprovado = ($idadePermitida && $rendaOuEstabilidade && $nomeLimpo);

echo "Idade permitida: " . ($idadePermitida ? "atendida" : "não atendida") . "\n";
echo "Renda ou estabilidade: " . ($rendaOuEstabilidade ? "atendida" : "não atendida") . "\n";
echo "Nome limpo: " . ($nomeLimpo ? "atendida" : "não atendida") . "\n";

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para $nome\n";
} else {
    echo "Resultado: Crédito negado para $nome\n";
}
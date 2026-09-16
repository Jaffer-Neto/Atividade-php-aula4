<?php
$materia1 = readline("Digite a primeira matrícula: ");
$materia2 = readline("Digite a segunda matrícula: ");

$resultadoStrcmp = strcmp($materia1, $materia2);
if ($resultadoStrcmp < 0) {
    echo "Comparando como texto (strcmp): $materia1 vem primeiro\n";
} elseif ($resultadoStrcmp > 0) {
    echo "Comparando como texto (strcmp): $materia2 vem primeiro\n";
} else {
    echo "Comparando como texto (strcmp): são iguais\n";
}

if ($materia1 < $materia2) {
    echo "Comparando com o operador <: $materia1 vem primeiro\n";
} elseif ($materia2 < $materia1) {
    echo "Comparando com o operador <: $materia2 vem primeiro\n";
} else {
    echo "Comparando com o operador <: são iguais\n";
}

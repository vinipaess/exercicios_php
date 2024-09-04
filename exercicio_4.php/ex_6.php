<?php

$vetor_a = array();
$vetor_b = array();
$vetor_resultado = array();


for ($i = 0; $i < 10; $i++) {
    echo "Digite o valor para a posição " . ($i + 1) . " do vetor A: ";
    $vetor_a[$i] = (int)trim(fgets(STDIN));
}


for ($i = 0; $i < 10; $i++) {
    echo "Digite o valor para a posição " . ($i + 1) . " do vetor B: ";
    $vetor_b[$i] = (int)trim(fgets(STDIN));
}


for ($i = 0; $i < 10; $i++) {
    $vetor_resultado[$i] = $vetor_a[$i] * $vetor_b[$i];
}


echo "\nResultados das multiplicações das posições dos vetores:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Vetor A[" . ($i + 1) . "] * Vetor B[" . ($i + 1) . "] = " . $vetor_resultado[$i] . "\n";
}

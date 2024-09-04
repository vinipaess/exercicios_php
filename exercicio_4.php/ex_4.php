<?php

$A = array();
$C = array();

for ($i = 0; $i < 10; $i++) {
    echo "Digite o número para a posição " . ($i + 1) . " do vetor A: ";
    $A[$i] = (int)trim(fgets(STDIN));
}

echo "Digite um número para a variável B: ";
$B = (int)trim(fgets(STDIN));

for ($i = 0; $i < 10; $i++) {
    $C[$i] = $A[$i] * $B;
}

echo "\nO vetor C é:\n";
foreach ($C as $indice => $valor) {
    echo "C[" . ($indice + 1) . "] = " . $valor . "\n";
}

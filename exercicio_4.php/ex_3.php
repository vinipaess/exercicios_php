<?php

$numeros = array();
$maiorValor = PHP_INT_MIN;
$posicaoMaiorValor = -1;

for ($i = 0; $i < 10; $i++) {
    do {
        echo "Digite o número positivo para a posição " . ($i + 1) . ": ";
        $numero = (int)trim(fgets(STDIN));
        if ($numero <= 0) {
            echo "Número inválido. Insira um número positivo.\n";
        }
    } while ($numero <= 0);

    $numeros[] = $numero;

    if ($numero > $maiorValor) {
        $maiorValor = $numero;
        $posicaoMaiorValor = $i;
    }
}
echo "\nO maior valor no vetor é: $maiorValor\n";
echo "Ele está na posição: " . ($posicaoMaiorValor + 1) . "\n";

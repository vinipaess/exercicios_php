<?php

$maior_valor = PHP_INT_MIN;
$menor_valor = PHP_INT_MAX;
do {

    $numero = readline("Digite um valor (0 para sair): ");
    $numero = (int)$numero;

    if ($numero != 0) {
        if ($numero > $maior_valor) {
            $maior_valor = $numero;
        }
        if ($numero < $menor_valor) {
            $menor_valor = $numero;
        }
    }
} while ($numero != 0);

if ($maior_valor != PHP_INT_MIN && $menor_valor != PHP_INT_MAX) {

    echo "O maior valor fornecido é: " . $maior_valor . "\n";
    echo "O menor valor fornecido é: " . $menor_valor . "\n";
} else {
    echo "Nenhum valor válido foi fornecido.\n";
}

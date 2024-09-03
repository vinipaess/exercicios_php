<?php

$soma = 0;
$quantidade = 0;
do {

    $numero = readline("Digite um valor (0 para sair): ");
    $numero = (int)$numero;
    if ($numero != 0) {

        $soma += $numero;
        $quantidade++;
    }
} while ($numero != 0);


if ($quantidade > 0) {

    $media = $soma / $quantidade;


    echo "A somatória dos valores é: " . $soma . "\n";
    echo "A média dos valores é: " . number_format($media, 2, ',', '.') . "\n";
    echo "A quantidade de valores lidos é: " . $quantidade . "\n";
} else {
    echo "Nenhum valor válido foi fornecido.\n";
}

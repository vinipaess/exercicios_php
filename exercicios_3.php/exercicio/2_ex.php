<?php

$soma = 0;
$quantidade = 10;

for ($i = 1; $i <= $quantidade; $i++) {

    $numero = readline("Digite o valor $i: ");  
    $numero = (int)$numero; 

    $soma += $numero;
}


$media = $soma / $quantidade;


echo "A somatória dos valores é: " . $soma . "\n";
echo "A média dos valores é: " . number_format($media, 2, ',', '.');


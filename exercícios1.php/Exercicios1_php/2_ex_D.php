<?php

$salarioMinimo = readline("Digite o valor do salario minimo:");
$quiloWatts = readline("Digite a quantidade de quiloWatts gasta em sua casa:");

$valorQuilowatt = ($salarioMinimo / 7) / 100;
$valorTotal = $quiloWatts * $valorQuilowatt;
$valorDesconto = $valorTotal * 0.9;

echo "o valor de quilowatts é $valorQuilowatt";
echo "\n";


echo "o valor total a se pagar é $valorTotal";
echo "\n";


echo "o valor com desconto é $valorDesconto";
echo "\n";

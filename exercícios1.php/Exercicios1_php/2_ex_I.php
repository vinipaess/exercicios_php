<?php   

$carrosVendidos = readline("Digite um numero de carros vendidos:");
$salarioFixo = readline("Digite quanto é o preço do salario:");
$valorTotalDeVendas= readline("Digite quanto renderam suas vendas:");
$comissão = readline("Digite um valor para comissão:");

$op1 = ($valorTotalDeVendas * 0.05);
$op2 = ($valorTotalDeVendas + $op1);

$salarioFinal = $salarioFixo + $comissão + $op2;
echo " O salario final e de $salarioFinal";
echo "\n";
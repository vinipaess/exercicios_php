<?php

$valor_compra = readline("quanto deu sua compra");
$preco_venda = readline("diga o preço da sua venda");

if ($valor_compra < 20.00) {

    $preco_venda = $valor_compra * 1.45;
} else {

    $preco_venda = $valor_compra * 1.30;
}

echo "O preço de venda do produto é: R$ " . number_format($preco_venda, 2, ',', '.');

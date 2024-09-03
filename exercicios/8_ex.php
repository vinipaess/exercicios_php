<?php

$preco_etiqueta = readline("preço da etiqueta");

$codigo_pagamento = readline("qual foi o codigo de pagamento (1 a 4)");


$valor_final = 0.00;

if ($codigo_pagamento == 1) {

    $valor_final = $preco_etiqueta * 0.90;
} elseif ($codigo_pagamento == 2) {

    $valor_final = $preco_etiqueta * 0.95;
} elseif ($codigo_pagamento == 3) {

    $valor_final = $preco_etiqueta;
} elseif ($codigo_pagamento == 4) {

    $valor_final = $preco_etiqueta * 1.10;
} else {
    echo "Código de pagamento inválido.";
    exit;
}
echo "O valor a ser pago é: R$ " . number_format($valor_final, 2, ',', '.');

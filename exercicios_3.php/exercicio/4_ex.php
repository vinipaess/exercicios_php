<?php

$soma = 0;
$quantidade = 0;

for ($i = 50; $i <= 70; $i++) {

    if ($i % 2 == 0) {
        $soma += $i;
        $quantidade++;
    }
}
if ($quantidade > 0) {
    $media = $soma / $quantidade;
} else {
    $media = 0;
}

echo "A somatória dos valores pares entre 50 e 70 é: " . $soma . "\n";
echo "A média dos valores pares entre 50 e 70 é: " . number_format($media, 2, ',', '.') . "\n";

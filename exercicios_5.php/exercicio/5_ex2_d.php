<?php
function somaDivisiveis($a, $b, $c)
{
    if ($a <= 1) {
        return "O valor de a deve ser maior que 1.";
    }

    $soma = 0;
    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a == 0) {
            $soma += $i;
        }
    }

    return $soma;
}

echo somaDivisiveis(2, 5, 10);

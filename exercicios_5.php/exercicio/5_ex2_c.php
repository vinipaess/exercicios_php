<?php
function somaEntre($a, $b)
{
    if ($a > $b) {

        list($a, $b) = [$b, $a];
    }

    $soma = 0;
    for ($i = $a + 1; $i < $b; $i++) {
        $soma += $i;
    }

    return $soma;
}

echo somaEntre(1, 4);

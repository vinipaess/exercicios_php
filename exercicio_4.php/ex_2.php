<?php
$numeros = array();
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;


for ($i = 0; $i < 10; $i++) {
    echo "Digite o número " . ($i + 1) . ": ";
    $numero = (int)trim(fgets(STDIN));
    $numeros[] = $numero;

    if ($numero < 0) {
        $negativos++;
    } elseif ($numero > 0) {
        $positivos++;
    }

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "\nTotal de números negativos: $negativos\n";
echo "Total de números positivos: $positivos\n";
echo "Total de números pares: $pares\n";
echo "Total de números ímpares: $impares\n";

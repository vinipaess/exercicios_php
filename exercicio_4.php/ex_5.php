<?php

$numeros = array();

for ($i = 0; $i < 10; $i++) {
    echo "Digite o número " . ($i + 1) . ": ";
    $numeros[$i] = (int)trim(fgets(STDIN));
}

echo "\nOs números na ordem inversa são:\n";
for ($i = 9; $i >= 0; $i--) {
    echo $numeros[$i] . "\n";
}

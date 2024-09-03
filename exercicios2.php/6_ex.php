<?php

$a = readline("digite um numero");
$b = readline("digite outro numero");

if ($a > $b) {
    echo "O maior valor é: " . $a;
} else {
    echo "O maior valor é: " . $b;
}
if ($a = $b){
echo "não é possivel ler dois valores iguais";
}
<?php

$b = readline("Digite um numero para a base do retangulo:");
$h = readline("Digite um numero para a altura do retangulo:");

$P = 2*($b+$h);
echo "O perimetro deste retangulo é $P";
echo "\n";

$A = $b * $h;
echo "a area deste retangulo é $A";
echo "\n";

$D =  sqrt($b**2 + $h**2);
echo "A diagonal deste retangulo é $D";
echo "\n";
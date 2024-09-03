<?php

$ano_nascimento = readline("em que ano voce nasceu");  
$ano_atual = date("Y");

$idade = $ano_atual - $ano_nascimento;

echo "A idade da pessoa é: " . $idade . " anos.\n";


if ($idade >= 16) {
    echo "A pessoa já pode votar.\n";
} else {
    echo "A pessoa ainda não pode votar.\n";
}

if ($idade >= 18) {
    echo "A pessoa já pode tirar a Carteira de Habilitação.\n";
} else {
    echo "A pessoa ainda não pode tirar a Carteira de Habilitação.\n";
}

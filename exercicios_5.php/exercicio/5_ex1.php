<?php

function soma($a, $b) {
    return $a + $b;
}
function subtracao($a, $b) {
    return $a - $b;
}
function multiplicacao($a, $b) {
    return $a * $b;
}
function divisao($a, $b) {
    if ($b == 0) {
        return "Erro: Divisão por zero não permitida.";
    } else {
        return $a / $b;
    }
}

$operacao = 2;  
$valor1 = 10;   
$valor2 = 5;    


$resultado = 0;

switch ($operacao) {
    case 1:
        $resultado = soma($valor1, $valor2);
        break;
    case 2:
        $resultado = subtracao($valor1, $valor2);
        break;
    case 3:
        $resultado = multiplicacao($valor1, $valor2);
        break;
    case 4:
        $resultado = divisao($valor1, $valor2);
        break;
    default:
        $resultado = "Erro: Operação inválida.";
}

echo "O resultado da operação é: " . $resultado . "\n";


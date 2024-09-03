<?php

$nota1 = readline("nota da 1a prova");
$nota2 = readline("nota da 2a prova");
$media = ($nota1 + $nota2)/2;

if($media >= 6 ){
    echo "voce foi aprovado";
}
if($media < 6){
    echo "voce foi reprovado";
}
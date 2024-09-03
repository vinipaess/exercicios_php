<?php

$maçã = readline("quantas maçãs voce comprou");



if ($maçã >= 12) {
$op1 = $maçã * 1;
echo "o preço total é de $op1";
}
if($maçã < 12){
    $op2= $maçã * 1.3;
    echo "o preço total é de $op2";
}
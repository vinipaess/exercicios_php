<?php
function pesoIdeal($altura, $sexo)
{
    if ($sexo == 'masculino') {
        return 72.7 * $altura - 58;
    } elseif ($sexo == 'feminino') {
        return 62.1 * $altura - 44.7;
    } else {
        return "Sexo inválido. Use 'masculino' ou 'feminino'.";
    }
}


echo pesoIdeal(1.75, 'feminino');

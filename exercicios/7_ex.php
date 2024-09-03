<?php
$idade = readline("digite sua idade");

$categoria = "";


if ($idade >= 5 && $idade <= 7) {
    $categoria = "Infantil A";
} elseif ($idade >= 8 && $idade <= 10) {
    $categoria = "Infantil B";
} elseif ($idade >= 11 && $idade <= 13) {
    $categoria = "Juvenil A";
} elseif ($idade >= 14 && $idade <= 17) {
    $categoria = "Juvenil B";
} elseif ($idade >= 18) {
    $categoria = "Sênior";
} else {
    $categoria = "Sem categoria";
}

// Exibindo a categoria do nadador
echo "A categoria do nadador é: " . $categoria;

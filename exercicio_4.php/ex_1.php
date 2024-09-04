<?php

$array = array();

for ($i = 1; $i <= 10; $i++) {
    $array[] = $i * 5;
}

foreach ($array as $value) {
    echo $value . "\n";
}

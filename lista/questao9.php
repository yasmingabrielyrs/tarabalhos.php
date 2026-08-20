<?php

$numero = 7;
$divisores = 0;

for ($contador = 1; $contador <= $numero; $contador++) {
    
    if ($numero % $contador == 0) {
        $divisores++;
    }
}

if ($divisores == 2) {
    echo $numero . " é primo.";
} else {
    echo $numero . " não é primo.";
}

?>


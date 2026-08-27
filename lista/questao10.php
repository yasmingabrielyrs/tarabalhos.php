<?php

$primeiro = 0;
$segundo = 1;

for ($contador = 1; $contador <= 15; $contador++) {
    
    echo $primeiro . " ";
    
    $proximo = $primeiro + $segundo;
    $primeiro = $segundo;
    $segundo = $proximo;
}

?>


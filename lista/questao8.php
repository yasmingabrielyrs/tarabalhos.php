<?php

$numero = 5;
$fatorial = 1;

for ($contador = $numero; $contador >= 1; $contador--) {
    $fatorial = $fatorial * $contador;
}

echo $numero . "! = " . $fatorial;

?>

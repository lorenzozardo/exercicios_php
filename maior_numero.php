<?php

$n1=7;
$n2=9;
$n3=5;
$maior=$n1;

if ($n2 > $maior) {
    $maior = $n2;
}
if ($n3 > $maior) {
    $maior = $n3;
}

echo 'o maior número é o ' . $maior;

?>
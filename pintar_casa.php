<?php

$metros=10;
$custo_material=200;
$custo_metro=20;

$custo=($metros*$custo_metro)+$custo_material;

echo 'o custo para pintar a casa vai ser de R$ '. number_format($custo, 2, ",", ".");

?>
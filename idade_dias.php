<?php

$anos=18;
$meses=10;
$dias=12;

$total_dias=($anos*365)+($meses*30)+$dias;

echo 'a idade em dias é de '. number_format($total_dias, 0, ","). ' dias';

?>
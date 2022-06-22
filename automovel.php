<?php

$nome_automovel="Hyundai HB20";
$preco_fabrica=71000;

//preço dos impostos
$preco_impostos = ($preco_fabrica / 100) * 37;

//preço da porcentagem do revendedor
$preco_revendedor = ($preco_fabrica / 100) * 22;

//preço total
$preco_final = $preco_fabrica + $preco_impostos + $preco_revendedor;

echo 'o automóvel ' . $nome_automovel . ' tem o preço final de R$ ' . number_format($preco_final, 2, ",", ".");

?>
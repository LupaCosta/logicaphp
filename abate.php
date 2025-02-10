<?php
// O sistema deverá pegar o peso do animal e deverá somar os pesos das partes.
// O sistema deverá calcular o valor a ser pago ao produtor baseado no valor da arroba

$valor_arroba = 341;
$produtor = 'Antonio Mezenga, ';
$peso_1 = 542;
$peso_2 = 638;
$arroba = 15;

$peso_total = $peso_1 + $peso_2;
$arroba_animal = ($peso_1 + $peso_2) /$arroba;
$valor_arroba_animal = $arroba_animal * $valor_arroba;

echo "O valor a pagar ao $produtor é de R$ $valor_arroba_animal";


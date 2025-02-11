<?php

// crie um array com números aleatorios.
// 1, exiba os números na ordem original.
// 2, ordene o array em ordem crescente e exiba novamente.
// 3, ordene o array em ordem decrescente e exiba novamente.

$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 14];



echo "números na ordem original: <br>";
$num_seq = implode("/ ", $numeros);
echo $num_seq;

echo "<br>Números em ordem crescente: <br>";
sort($numeros);
$num_order = implode(", ", $numeros);
echo $num_order;

echo "<br>Npumeros em ordem decrescente: <br>";
rsort($numeros);
$num_order_dec = implode(", ", $numeros);
echo $num_order_dec;
<?php

//exercicio 2: soma de valores em um array

// crie um array contendo os seguintes números: 5, 10, 15, 20, 25.
// * some todos os valores e exiba o resultado na tela.

$numeros = [ 5, 10, 15, 20, 25];
$total = 0;

foreach ( $numeros as $numero) {
    // "$total += $numero" mesma coisa que embaix.
 $total = $total + $numero; 
}
echo "a soma dos números é: $total";

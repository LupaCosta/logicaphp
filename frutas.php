<?php

//exercicio 1: manipulação de arrays simples

// crie um array com 5 nomes de frutas
// 1. exiba todos os itens do array usando um foreach
// 2. adicione uma nova fruta ao final do array
// 3, remova a primeira fruta do array
// 4, exiba novamente o array atualizado.

$frutas = ['maçã', 'banana', 'laranja', 'abacaxi', 'uva'];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "-----------------------<br>"; 

$frutas[] = "morango";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo '------------------------<br>';

array_shift($frutas); //remove o primeiro elemento do array
unset($frutas[1]); //remove o elemento através do índice

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
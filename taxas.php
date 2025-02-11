<?php
// exercicio 5 conversão de moedas

// crie um array associativo com as taxas de conversão de diferentes moedas para reais (R$):
    // dólar (USD) - 5.10
    // euro (EUR) - 5.50
    //LIbra(GBP) - 6.30
    // peso argentino(ARS) - 0.05

    $taxas = [
        'dólar' => 5.10,
        'euro' => 5.50,
        'libra' =>6.30,
        'peso' => 0.05
    ];

    $valor_real = 100;{
    echo 'valor em dólar: R$' . number_format($valor_real / $taxas['USD'], 2, ',', ',') . '<br>';
    echo 'valor em euro: R$' . number_format($valor_real / $taxas['EUR'], 2, ',', ',') . '<br>';
    echo 'valor em libra: R$' . number_format($valor_real / $taxas['LIB'], 2, ',', ',') . '<br>';
    echo 'valor em peso: R$' . number_format($valor_real / $taxas['ARS'], 2, ',', ',') . '<br>';
    }


   


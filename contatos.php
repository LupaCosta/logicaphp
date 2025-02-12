<?php

$dados = array( 
    "nome" => "Bernardo",
    "data nasc" => '03/03/2017',

    "documentos" => array(
        'rg' => "20.565.555-20",
        'cpf' => '119.854.888-00',
        'cnh' => '2548785452',
    ),
    'endereco' => array(
        'tipo' => 'rua',
        'logradouro' => 'rua a',
        'numero' => '186',
        'complemento' => 'ap 101',
        'bairro' => 'centro',
        'cidade' => 'valenca',
        'uf' => 'rj',
        'cep' => '27600-000',

    ),
     'filiacao' => array(
            'nome_pai' => 'luis paulo',
            'nome_mae' => 'mirian',
     ),
    'contatos' => array(
            'celular' => '24-99999999',
            'fixo' => '2424532222',
            'e-mail' => 'bernardogk@gmail.com',
        ),
        );
        
echo $dados ['nome'] . '<br>';
echo $dados ['data nasc'] . '<br>';


        foreach ($dados['contatos'] as $key => $value) {
            echo $key . ":" . " " . $value . "<br>";
        }

        foreach ($dados['endereco'] as $key => $value) {
            echo $key . ":" . " " . $value . "<br>";
        }

        foreach ($dados['filiacao'] as $key => $value) {
            echo $key . ":" . " " . $value . "<br>";
        } 

        foreach ($dados['documentos'] as $key => $value) {
            echo $key . ":" . " " . $value . "<br>";
        }
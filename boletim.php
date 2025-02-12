<?php

// Exercicio 3: Manipulação de arrays associativos
// Crie um Array associativo com as seguintes informações de alunos
//  nome
// idade
// Nota
// Utilize um loop foreach para exibir as informações de cada aluno 
// Baseado na nota, exiba uma msg de aprovação ou reprovação
// se a nota for maior ou igual a 7, exibir a msg: aluno aprovado
// se a nota for menor que 7, maior ou igual a 5 exiba a msg: Aluno em recuperação
// se a nota for menor que 5, exibir a msg: aluno reprovado

$aluno = [ 
    'Nome' => 'Bernardo Costa',
    'Matéria' => 'Matemática',
    'Nota' => 98];

    if($aluno['nota'] >= 7) {
        echo 'o aluno está aprovado';
        echo '<br><br>';
    } 
    else if ($aluno['nota'] >= 5 && $aluno['nota'] < 7) {
        echo 'O aluno está em recuperação';
        echo '<br><br>';
    
    }
    else {
        echo 'o aluno está reprovado';
        echo '<br><br>';

    };
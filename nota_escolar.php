<?php
//Crie um app que leia as notas de um aluno nos quatro bimestres
//calcule a media e se o aluno teve nota maior ou igual a 7 aprovado
//se teve nota menor que 7 reprovado

$aluno = 'Lupa Costa'
$nota_b1 = 9,2
$nota_b2 = 8,5
$nota_b3 = 8,9
$nota_b4 = 6,5

if ($nota_b1 + $nota_b2 + $nota_b3 + $nota_b4 /2 => 7,0)
{
    echo $aluno . 'Está aprovado';
}
else 
{
    echo $aluno . 'Está reprovado';
}

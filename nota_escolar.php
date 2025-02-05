<?php
//Crie um app que leia as notas de um aluno nos quatro bimestres
//calcule a media e se o aluno teve nota maior ou igual a 7 aprovado
//se teve nota menor que 7 reprovado

$aluno = 'Lupa Costa, ';
$notab1 = 5;
$notab2 = 9.5;
$notab3 = 10;
$notab4 = 6;
$media = ($notab1 + $notab2 + $notab3 + $notab4) / 4;

if ($media >= '7,0')
{
    echo $aluno . 'Você Está aprovado com média ' . $media ;
}

else if ( $media < 7 && $media >= 5) 
{
    echo $aluno . 'Vocé está em recuperação com média,' . $media;
}

else 
{
    echo $aluno . 'Você Está reprovado com média ' . $media ;
}

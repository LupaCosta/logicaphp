<?php

echo 'Boletim Escolar Anual' . '<br>' . '<br>';

$boletim = array(
    'Aluno1' => 'Bernardo',
    'matéria' => 'matematica',
    'nota_b1' => 8.9,
    'nota_b2' => 7.8,
    'nota_b3' => 4.5,
    'nota_b4' => 9.8,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo $boletim['Aluno1'] . '<br>'; 
echo 'Matematica: ' . $media . '<br>';

$boletim = array(
    'Aluno1' => 'Bernardo',
    'matéria' => 'portugues',
    'nota_b1' => 8.9,
    'nota_b2' => 9.9,
    'nota_b3' => 6.9,
    'nota_b4' => 9.8,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo 'Português: ' . $media . '<br>';

$boletim = array(
    'Aluno1' => 'Bernardo',
    'matéria' => 'geografia',
    'nota_b1' => 10,
    'nota_b2' => 7.8,
    'nota_b3' => 9.5,
    'nota_b4' => 9.1,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo 'Geografia: ' . $media . '<br>' . '<br>';

$boletim = array(
    'Aluno2' => 'Luis',
    'matéria' => 'matematica',
    'nota_b1' => 8.5,
    'nota_b2' => 10,
    'nota_b3' => 6.7,
    'nota_b4' => 9.8,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo $boletim['Aluno2'] . '<br>';   
echo 'Matematica: ' . $media . '<br>';

$boletim = array(
    'Aluno2' => 'Luis',
    'matéria' => 'portugues',
    'nota_b1' => 9.5,
    'nota_b2' => 7.9,
    'nota_b3' => 9.8,
    'nota_b4' => 9,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo 'Português: ' . $media . '<br>';

$boletim = array(
    'Aluno2' => 'Luis',
    'matéria' => 'geografia',
    'nota_b1' => 9.1,
    'nota_b2' => 10,
    'nota_b3' => 6.5,
    'nota_b4' => 7.9,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo 'Geografia: ' . $media . '<br>' . '<br>';

$boletim = array(
    'Aluno3' => 'Paulo',
    'matéria' => 'matematica',
    'nota_b1' => 10,
    'nota_b2' => 8.2,
    'nota_b3' => 6.8,
    'nota_b4' => 9.8,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo $boletim['Aluno3'] . '<br>';
echo 'Matematica: ' . $media . '<br>';

$boletim = array(
    'Aluno3' => 'Paulo',
    'matéria' => 'portugues',
    'nota_b1' => 9.8,
    'nota_b2' => 7.8,
    'nota_b3' => 6.5,
    'nota_b4' => 9.0,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo 'Português: ' . $media . '<br>';

$boletim = array(
    'Aluno3' => 'Paulo',
    'matéria' => 'geografia',
    'nota_b1' => 9.9,
    'nota_b2' => 7.5,
    'nota_b3' => 6.5,
    'nota_b4' => 9.7,
);

$media = ($boletim['nota_b1'] + $boletim['nota_b2'] + $boletim['nota_b3'] + $boletim['nota_b4']) / 4;
echo 'Geografia: ' . $media . '<br>' . '<br>';




<?php

$notas = [
    10,
    8,
    9,
    7
];

// a função sort ela ALTERA a lista. portanto, precisa primeiro criar uma outra para manter a original intacta
// sort ordena de forma crescente e rsort, decrescente (r=reverse)

$notasOrdenadas = $notas;

sort($notasOrdenadas);

//var_dump($notasOrdenadas);

$listaNotas = [
    [
        'aluno' => 'maria',
        'notas' => 10
    ],
    [
        'aluno' => 'joao',
        'notas' => 3
    ],
    [
        'aluno' => 'evanete',
        'notas' => 7
    ]
];

function ordenaNotas(array $nota1, array $nota2): int{
    // compara em ordem crescente abaixo. para ordenar de forma decrescente basta trocar nota 1 e nota 2
    // return $nota1['notas']<=>$nota2['notas'];
    if($nota1['notas']>$nota2['notas'])
        return 1;
    else if($nota1['notas']<$nota2['notas'])
        return -1;
    else
        return 0;
}

usort($listaNotas, callback:'ordenaNotas');
var_dump($listaNotas);

// asort/arsort mantem os indices na ordenacao (a=assossiation)
// ksort/krsort ordena por indice (k=key)

?>
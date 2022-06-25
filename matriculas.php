<?php

$alunos2021 =[
    'vinicius',
    'joao',
    'ana',
    'roberto',
    'maria'
];

$novosAlunos =[
    'Patricia',
    'Nico',
    'Anderson',
    'Daiane'
];

//neste caso, a chave do ultimo array sobrescreve o do primeiro (quando é não numerico sequencial)
$alunos2022 = array_merge($alunos2021,$novosAlunos);
var_dump($alunos2022);

//o primeiro array é mantido quando tem a mesma chave do
$alunos2022 = $alunos2021 + $novosAlunos;
var_dump($alunos2022);

//outra forma é como "desempacotando" os componentes do array
//anpacking arrays = funciona com arrays
$alunos2022 = [...$alunos2021, ...$novosAlunos];
var_dump($alunos2022);

//une todos os parametros (tipos diferentes) em um unico array
//spread operator = funciona com funcoes
funcao(...[1, 3, 34]); 
function funcao(int $a, int $b, int $c){}

//adicionando no array
array_push($alunos2022, 'alice','bob','charlie');

//adiciona um elemento no final do array
$alunos2022[] = 'luiz';

//adiciona elementos no inicio do array
array_unshift($alunos2022,'stephanie');
//array_shift retira o primeiro elemento da lista, exibe e reordena a array
//arrays numericos serao reordenados e de sting permanece

//array_pop faz o igual mas com ultimo elemento do array
echo array_pop($alunos2022).PHP_EOL;

?>
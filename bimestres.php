<?php

$bimestre2 =[
    'joao' => 8,
    'ana' => 10,
    'roberto' => 7,
    'maria' => 9
];

//exibe valores que estao no primeiro array e nao no segundo
var_dump(array_diff($bimestre1,$bimestre2));

//exibe chaves que estao no primeiro array e nao no segundo
var_dump(array_diff_key($bimestre1,$bimestre2));

//compara chave e o valor
var_dump(array_diff_assoc($bimestre1,$bimestre2));

//seleciona apenas a chave faltante
$alunosFaltantes = array_diff_key($bimestre1,$bimestre2);
var_dump(array_keys($alunosFaltantes));

//combinacao de arrays (tem que ter o mesmo tamanho)
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_combine($notasAlunos,$nomesAlunos));

//chave vira valor e valor vira chave
var_dump(array_flip($alunosFaltantes));

?>
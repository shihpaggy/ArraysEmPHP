<?php

$dados = ['Vinicios', 10, 24];
list($nome, $nota, $idade) = $dados;
//mesmo resultado
//[$nome, $nota, $idade] = $dados;
var_dump($nome, $nota, $idade);

//atribui uma variavel com os itens da array
$chaveString = [
    'primeiro' => 'um',
    'segundo' => 'dois',
    'terceiro' => 'tres'
];

['primeiro'=> $primeiro, 'segundo' => $segundo, 'terceiro' => $terceiro] = $chaveString;
var_dump($primeiro,$segundo,$terceiro);

//transforma as chaves do array em uma variavel
extract(chaveString);
var_dump($nome, $nota, $idade);

//transforma os elementos em nome de chaves
var_dump(compact('nome','nota','idade'));

?>
<?php

$notas =[
    'vinicius' => 6,
    'joao' => 8,
    'ana' => 10,
    'roberto' => 7,
    'maria' => 9
];

if(is_array($notas)){
    echo 'é um array'.PHP_EOL;
}

//verifica se é lista
var_dump(array_is_list($notas));

//verifica se existe a chave 'vinicius'
var_dump(array_key_exists('vinicius', $notas));

//verifica se o valor é nulo
var_dump(isset($notas['vinicius']));

//verifica se existe o valor
var_dump(in_array(10,$notas));

//retorna a chave que contém o valor
echo array_search(10,$notas);

?>

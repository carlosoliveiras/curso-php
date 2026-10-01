<?php
// Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

// peso (kg) ÷ [altura (m) × altura (m)]

function imc(float $peso, float $altura){
    $imc = $peso / ($altura**2);
    return $imc;
}

$peso = $argv[1];
$altura = $argv[2];

echo imc($peso, $altura) . PHP_EOL;
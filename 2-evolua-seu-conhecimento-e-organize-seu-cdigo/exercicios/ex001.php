<?php
// Escreva uma função em PHP que receba dois números inteiros e uma string
// representando a operação matemática e retorne o resultado da operação.

function calcular(int $n1, int $n2, string $op): float{
    $resultado = match ($op){
        '+' => $n1 + $n2,
        '-' => $n1 - $n2,
        '*' => $n1 * $n2,
        '/' => $n1 / $n2,
    };

    return $resultado;
}

$n1 = $argv[1];
$n2 = $argv[2];
$op = $argv[3];

echo calcular($n1, $n2, $op) . PHP_EOL;
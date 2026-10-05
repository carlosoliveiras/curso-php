<?php
// Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

function ordena(array $array): array{
    sort($array);
    return $array;
}

var_dump(
    ordena(['Oi', 'Avião', 'Escola', 'Bola', 'Wall'])
);
<?php
// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [
    10,
    5,
    8,
    3,
    1
];

rsort($notas);
var_dump($notas);